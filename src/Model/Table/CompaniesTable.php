<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Text;

/**
 * Companies Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\HasMany $Orders
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Companie get($primaryKey, $options = [])
 * @method \App\Model\Entity\Companie newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Companie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Companie|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Companie saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Companie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Companie[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Companie findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompaniesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('companies');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
         $this->belongsTo('Ressources', [
            'foreignKey' => 'ressource_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'companie_id',
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'companie_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'companies_tags',
        ]);
        $this->belongsToMany('Files', [
            'foreignKey' => 'companie_id',
            'targetForeignKey' => 'file_id',
            'joinTable' => 'companies_files',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmptyString('id', null, 'create');

        $validator
                ->scalar('title')
                ->maxLength('title', 255)
                ->requirePresence('title', 'create')
                ->notEmptyString('title');

        /*        $validator
          ->scalar('slug')
          ->maxLength('slug', 191)
          ->requirePresence('slug', 'create')
          ->notEmptyString('slug')
          ->add('slug', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
         */
        $validator
                ->scalar('body')
                ->allowEmptyString('body');

        $validator
                ->boolean('published')
                ->allowEmptyString('published');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['slug']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }

    public function beforeSave($event, $entity, $options) {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->title);
            // trim slug to maximum length defined in schema
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }

// The $query argument is a query builder instance.
// The $options array will contain the 'tags' option we passed
// to find('tagged') in our controller action.
    public function findTagged(Query $query, array $options) {
        $columns = [
            'Companies.id', 'Companies.user_id', 'Companies.title',
            'Companies.body', 'Companies.published', 'Companies.created',
            'Companies.slug',
        ];

        $query = $query
                ->select($columns)
                ->distinct($columns);

        if (empty($options['tags'])) {
            // If there are no tags provided, find companies that have no tags.
            $query->leftJoinWith('Tags')
                    ->where(['Tags.title IS' => null]);
        } else {
            // Find companies that have one or more of the provided tags.
            $query->innerJoinWith('Tags')
                    ->where(['Tags.title IN' => $options['tags']]);
        }

        return $query->group(['Companies.id']);
    }

}
