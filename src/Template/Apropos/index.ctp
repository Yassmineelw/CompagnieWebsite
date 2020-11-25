<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apropo[]|\Cake\Collection\CollectionInterface $apropos
 */
?>

<div class="apropos index large-9 medium-8 columns content">
    <h3><?= __('Apropos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
           
        </thead>
        <tbody>
        <h5>NOM : Yassmine El Wasmi</h5>
           <ul>
    <li>Enseigant du cours : André Pilon</li>
    <li>420-5B7 MO Applications Internet</li>
    <li>Autonme 2020, Collège Montmorency</li>
    <li>Lien GitHub : https://github.com/Yassmineelw/CompagnieWebsite.git </li>
</ul>

<h3>Information des compagnies.</h3>
<ul>
    <li>Cette application web permet de créer un utilisateur avec plusieurs rôles. Nous avons le rôle d'administrateur qui a
         un contrôle total sur l’environnement, nous avons aussi le client qui peut ajouter une compagnie ainsi qu'une commande
          en ayant accès à la modification, l’ajout et la suppression de ses propres informations. Comme dernier rôle nous avons 
          celui du visiteur qui a comme unique fonction d'avoir un aperçu des compagnies dans la liste index. L’application permet 
          d'ajouter une compagnie ainsi que d'avoir accès à ces fonctions, de plus nous pouvons insérer une commande selon la 
          compagnie choisie, directement liée à l'utilisateur clé. Dans la liste des compagnies nous retrouvons le nom le numéro 
          de téléphone l'adresse la date. Tandis que dans la liste commande nous avons le nom le statut comme 
          arrivée ou en cours et la date.</li>

    <li>La table rôle interagit avec celle de Users. Les 2 sont reliés avec une clé secondaire appeler rôle ID qui permettra 
        aux user d'avoir un rôle lui limitant les accès selon la catégorie. Dépendamment de son rôle user, celui-ci pourra interagir
         avec la table compagnie, qui elle, est liés avec une clé secondaire nommé users ID.  La table compagnie est relié avec 2 
         autres tables la première est celle des commandes, reliés avec une clé secondaire appeler Company id, ces 2 tables auront 
         une relation 1N. l’autre table nommé photo est elle aussi relié avec une clé secondaire nommée compagnie id. Grace à cette 
         table photo chaque compagnie aura une photo uploader selon son index. Pour finir nous avons la table I18N qui se retrouve
          être une table indépendante, cela veut dire qu'elle n'est reliée avec aucune des autres tables dans la base de données. 
          Cette table permet la traduction multilingue des informations saisies par exemple dans l'application nous retrouvons 3 langues comme l'anglais le français et l'espagnol.</li>

    <li>La remise du lien sur github fonctionne, ainsi que la page à propos. La base de données contient des tables en
         relation 1N et nn. En ce qui concerne le cake bake, ma base de données contient 5 tables qui sont tous reliés à 
         l'aide d'une clé étrangère, ce qui permet au bon fonctionnement de celle-ci. J'ai 3 types d'utilisateurs l'administrateur, 
         le client et le visiteur ils sont tous classer par type d'autorisation avec une méthode isAuthorized().Mon application
          permet la translation de 3 langues le français, l'anglais et l'espagnol, non seulement nous pouvons modifier la langue.
           Pour finir dans le dernier point l'évaluation en ligne avec le professeur j'y ai participé.
    </li>
   
    <ul>
        
<br>

<table>
    <tr>
        <td>
            <h4>Base de données utilisée par l'application :</h4>
            <object data="Contenu/images/ruines_de_chateaux.svg" type="image/svg+xml" height="300" width="800">
                <img src="img/base.png" alt=""/>
            </object><br/>
        </td>
    </tr>
    <tr>
        <td>
            <h4>Basé sur ce modèle original :</h4>
            <a href="http://www.databaseanswers.org/data_models/products_orders_and_orders/index.htm" >
                <img src="img/data_model.gif" alt=""/>
                Compagnies as a "Real Life example :</a>
        </td>
    </tr>
</table>
        </tbody>
    </table>
    
</div>
