<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Préscolaire</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header-outer">
<div class="header">
<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
<a id="toggle_btn" class="float-left" href="javascript:void(0);">
<img src="assets/img/sidebar/icon-21.png" alt="">
</a>

<ul class="nav float-left">
<li>
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="search.html">
<input class="form-control" type="text" placeholder="Rechercher ici">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</li>
<li>
<a href="{{url('/index')}}" class="mobile-logo d-md-block d-lg-none d-block"><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
</li>
</ul>

<ul class="nav user-menu float-right">
<li class="nav-item dropdown d-none d-sm-block">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<img src="assets/img/sidebar/icon-22.png" alt="">
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span>Notifications</span>
</div>
<div class="drop-scroll">
<ul class="notification-list">
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">
<img alt="John Doe" src="assets/img/user-06.jpg" class="img-fluid rounded-circle">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">John Doe</span> vous suit maintenant</p>
<p class="noti-time"><span class="notification-time">Il y a 4 minutes</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">T</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> vous a envoyé un message.</p>
<p class="noti-time"><span class="notification-time">Il y a 6 minutes</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">L</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Misty Tison</span> aime votre photo.</p>
<p class="noti-time"><span class="notification-time">Il y a 8 minutes</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">G</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> a réservé un rendez-vous pour une réunion.</p>
<p class="noti-time"><span class="notification-time">Il y a 12 minutes</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">T</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> aime votre photo.</p>
<p class="noti-time"><span class="notification-time">Il y a 2 jours</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="{{url('/activities')}}">Voir toutes les notifications</a>
</div>
</div>
</li>
<li class="nav-item dropdown d-none d-sm-block">
<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="assets/img/sidebar/icon-23.png" alt=""> </a>
</li>
<li class="nav-item dropdown has-arrow">
<a href="#" class=" nav-link user-link" data-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="assets/img/user-06.jpg" width="30" alt="Admin">
 <span class="status online"></span></span>
<span>Admin</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="{{url('/profile')}}">Mon profil</a>
<a class="dropdown-item" href="{{url('/edit-profile')}}">Modifier le profil</a>
<a class="dropdown-item" href="settings.html">Paramètres</a>
<a class="dropdown-item" href="{{url('/login')}}">Déconnexion</a>
</div>
</li>
</ul>
<div class="dropdown mobile-user-menu float-right"> 
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="{{url('/profile')}}">Mon profil</a>
<a class="dropdown-item" href="{{url('/edit-profile')}}">Modifier le profil</a>
<a class="dropdown-item" href="settings.html">Paramètres</a>
<a class="dropdown-item" href="{{url('/login')}}">Déconnexion</a>
</div>
</div>
</div>
</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<div class="header-left">
<a href="{{url('/index')}}" class="logo">
<img src="assets/img/logo1.png" width="40" height="40" alt="">
<span class="text-uppercase">Préscolaire</span>
</a>
</div>
<ul class="sidebar-ul">
<li class="menu-title">Menu</li>
<li class="active">
<a href="{{url('/index')}}"><img src="assets/img/sidebar/icon-1.png" alt="icon"><span>Tableau de bord</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Enseignants</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="{{url('/all-teachers')}}"><span>Tous les enseignants</span></a></li>
<li><a href="{{url('/add-teacher')}}"><span>Ajouter un enseignant</span></a></li>
<li><a href="{{url('/edit-teacher')}}"><span>Modifier un enseignant</span></a></li>
<li><a href="about-teacher.html"><span>À propos de l'enseignant</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-3.png" alt="icon"> <span> Élèves</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-students.html"><span>Tous les élèves</span></a></li>
<li><a href="add-student.html"><span>Ajouter un élève</span></a></li>
<li><a href="edit-student.html"><span>Modifier un élève</span></a></li>
<li><a href="about-student.html"><span>À propos de l'élève</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-4.png" alt="icon"> <span> Parents</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-parents.html"><span>Tous les parents</span></a></li>
<li><a href="add-parent.html"><span>Ajouter un parent</span></a></li>
<li><a href="edit-parent.html"><span>Modifier un parent</span></a></li>
<li><a href="about-parent.html"><span>À propos du parent</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/sidebar/icon-5.png" alt="icon"> <span>Applications</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"><span>Courriel</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="{{url('/compose')}}"><span>Composer un courriel</span></a></li>
<li>
<a href="{{url('/inbox')}}"> <span> Boîte de réception</span> </a>
</li>
<li><a href="mail-view.html"><span>Afficher le courriel</span></a></li>
</ul>
</li>
<li>
<a href="{{url('/chat')}}"> Chat <span class="badge badge-pill bg-primary float-right">5</span></a>
</li>
<li class="submenu">
<a href="#"><span> Appels</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="voice-call.html"><span>Appel vocal</span></a></li>
<li><a href="video-call.html"><span>Appel vidéo</span></a></li>
<li><a href="incoming-call.html"><span>Appel entrant</span></a></li>
</ul>
</li>
<li>
<a href="contacts.html"><span> Contacts</span></a>
</li>
</ul>
</li>
<li>
<a href="calendar.html"><img src="assets/img/sidebar/icon-6.png" alt="icon"> <span>Calendrier</span></a>
</li>
<li>
<a href="exam-list.html"><img src="assets/img/sidebar/icon-7.png" alt="icon"> <span>Liste des examens</span></a>
</li>
<li>
<a href="holidays.html"><img src="assets/img/sidebar/icon-8.png" alt="icon"> <span>Vacances</span></a>
</li>
<li>
<a href="calendar.html"><img src="assets/img/sidebar/icon-9.png" alt="icon"><span> Événements</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-10.png" alt="icon"><span> Comptes </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="{{url('/invoices')}}"><span>Factures</span></a></li>
<li><a href="{{url('/payments')}}"><span>Paiements</span></a></li>
<li><a href="expenses.html"><span>Dépenses</span></a></li>
<li><a href="provident-fund.html"><span>Fonds de prévoyance</span></a></li>
<li><a href="taxes.html"><span>Taxes</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-11.png" alt="icon"><span> Paie </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="salary.html"><span> Salaire des employés </span></a></li>
<li><a href="salary-view.html"><span> Fiche de paie </span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-12.png" alt="icon"> <span> Blog</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="blog.html"><span>Blog</span></a></li>
<li><a href="blog-details.html"><span>Voir le blog</span></a></li>
<li><a href="add-blog.html"><span>Ajouter un blog</span></a></li>
<li><a href="edit-blog.html"><span>Modifier le blog</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);" class="noti-dot"><img src="assets/img/sidebar/icon-13.png" alt="icon"> <span>Gestion </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="#"><span> Employés</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-employees.html"><span>Tous les employés</span></a></li>
<li><a href="holidays.html"><span>Vacances</span></a></li>
<li><a href="leaves.html"><span>Demandes de congé</span> <span class="badge badge-pill bg-primary float-right">1</span></a></li>
<li><a href="attendance.html"><span>Présence</span></a></li>
<li><a href="departments.html"><span>Départements</span></a></li>
<li><a href="designations.html"><span>Désignations</span></a></li>
</ul>
</li>
<li>
<a href="{{url('/activities')}}"><span>Activités</span></a>
</li>
<li>
<a href="users.html"><span>Utilisateurs</span></a>
</li>
<li class="submenu">
<a href="#"><span> Rapports </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="expense-reports.html"> <span>Rapport de dépenses </span></a></li>
<li><a href="invoice-reports.html"> <span>Rapport de factures</span> </a></li>
</ul>
</li>
</ul>
</li>
<li>
<a href="settings.html"><img src="assets/img/sidebar/icon-14.png" alt="icon"> <span>Paramètres</span></a>
</li>
<li class="menu-title">Éléments UI</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-15.png" alt="icon"> <span> Composants</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="uikit.html"><span>Kit UI</span></a></li>
<li><a href="typography.html"><span>Typographie</span></a></li>
<li><a href="tabs.html"><span>Onglets</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-26.png" alt="icon"> <span> Éléments</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="sweetalerts.html">Alertes Sweet</a></li>
<li><a href="tooltip.html">Info-bulle</a></li>
<li><a href="popover.html">Popover</a></li>
<li><a href="ribbon.html">Ruban</a></li>
<li><a href="clipboard.html">Presse-papiers</a></li>
<li><a href="drag-drop.html">Glisser-déposer</a></li>
<li><a href="rangeslider.html">Curseur de plage</a></li>
<li><a href="rating.html">Évaluation</a></li>
<li><a href="toastr.html">Toastr</a></li>
<li><a href="text-editor.html">Éditeur de texte</a></li>
<li><a href="counter.html">Compteur</a></li>
<li><a href="scrollbar.html">Barre de défilement</a></li>
<li><a href="spinner.html">Indicateur de progression</a></li>
<li><a href="notification.html">Notification</a></li>
<li><a href="lightbox.html">Lightbox</a></li>
<li><a href="stickynote.html">Note adhésive</a></li>
<li><a href="timeline.html">Chronologie</a></li>
<li><a href="horizontal-timeline.html">Chronologie horizontale</a></li>
<li><a href="form-wizard.html">Assistant de formulaire</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-27.png" alt="icon"> <span> Graphique</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="chart-apex.html">Graphiques Apex</a></li>
<li><a href="chart-js.html">Graphiques Js</a></li>
<li><a href="chart-morris.html">Graphiques Morris</a></li>
<li><a href="chart-flot.html">Graphiques Flot</a></li>
<li><a href="chart-peity.html">Graphiques Peity</a></li>
<li><a href="chart-c3.html">Graphiques C3</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-28.png" alt="icon"> <span>Icônes</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="icon-fontawesome.html">Icônes Fontawesome</a></li>
<li><a href="icon-feather.html">Icônes Feather</a></li>
<li><a href="icon-ionic.html">Icônes Ionic</a></li>
<li><a href="icon-material.html">Icônes Material</a></li>
<li><a href="icon-pe7.html">Icônes Pe7</a></li>
<li><a href="icon-simpleline.html">Icônes Simpleline</a></li>
<li><a href="icon-themify.html">Icônes Themify</a></li>
<li><a href="icon-weather.html">Icônes Weather</a></li>
<li><a href="icon-typicon.html">Icônes Typicon</a></li>
<li><a href="icon-flag.html">Icônes de drapeau</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-17.png" alt="icon"> <span> Formulaires</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="basic-inputs.html"><span>Entrée de base</span></a></li>
<li><a href="form-basic-inputs.html"><span>Entrées de base</span></a></li>
<li><a href="form-input-groups.html"><span>Groupes d'entrées</span></a></li>
<li><a href="form-horizontal.html"><span>Formulaire horizontal</span></a></li>
<li><a href="form-vertical.html"><span>Formulaire vertical</span></a></li>
<li><a href="form-validation.html"> Validation de formulaire </a></li>
<li><a href="form-select2.html">Formulaire Select2 </a></li>
<li><a href="form-fileupload.html">Téléchargement de fichier </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-18.png" alt="icon"> <span> Tables</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="tables-basic.html"><span>Tables de base</span></a></li>
<li><a href="tables-datatables.html"><span>Tableau de données</span></a></li>
</ul>
</li>
<li class="menu-title"><span>Extras</span></li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-19.png" alt="icon"> <span>Pages</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="{{url('/login')}}"> <span>Connexion </span></a></li>
<li><a href="register.html"><span> Inscription </span></a></li>
<li><a href="forgot-password.html"> <span>Mot de passe oublié</span> </a></li>
<li><a href="change-password2.html"> <span>Changer le mot de passe</span> </a></li>
<li><a href="lock-screen.html"> <span>Écran de verrouillage </span></a></li>
<li><a href="{{url('/profile')}}"> <span>Profil</span> </a></li>
<li><a href="gallery.html"> <span>Galerie </span></a></li>
<li><a href="error-404.html"><span>Erreur 404 </span></a></li>
<li><a href="error-500.html"><span>Erreur 500 </span></a></li>
<li><a href="blank-page.html"><span> Page blanche</span> </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/sidebar/icon-20.png" alt="icon"> <span>Niveaux multiples</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"><span>Niveau 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Niveau 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Niveau 2</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="javascript:void(0);">Niveau 3</a></li>
<li><a href="javascript:void(0);">Niveau 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"><span>Niveau 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"><span>Niveau 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Détail de l'examen</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="{{url('/index')}}"><i class="fas fa-home"></i> Accueil</a></li>
<li class="breadcrumb-item"><a href="{{url('/index')}}">Liste des examens</a></li>
<li class="breadcrumb-item"><span> Détail de l'examen</span></li>
</ul>
</div>
</div>
</div>
<div class="page-content">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<div class="page-title">Détail de l'examen</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<ul class="list-group list-group-flush">
<li class="list-group-item list-group-item-info">
Nom de l'examen: Test de classe
</li>
<li class="list-group-item">Type de sujet : Mathématiques</li>
<li class="list-group-item list-group-item-info">Classe : 3</li>
<li class="list-group-item">Section : B</li>
<li class="list-group-item list-group-item-info">Date : 27/12/2018</li>
<li class="list-group-item">Heure : 10.00 am - 11.00 am</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="notification-box">
<div class="msg-sidebar notifications msg-noti">
<div class="topnav-dropdown-header">
<span>Messages</span>
</div>
<div class="drop-scroll msg-list-scroll">
<ul class="list-box">
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item new-message">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Ruth C. Gault</span>
<span class="message-time">1 Août</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
 <span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author"> Tarah Shropshire </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Mike Litorus</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Catherine Manseau </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">D</span>
</div>
<div class="list-body">
<span class="message-author"> Domenic Houston </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">B</span>
</div>
<div class="list-body">
<span class="message-author"> Buster Wigton </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author"> Rolland Webber </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Claire Mapes </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Melita Faucher</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Jeffery Lalor</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
 </div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">L</span>
</div>
<div class="list-body">
<span class="message-author">Loren Gatlin</span>
<span class="message-time">12:28 AM</span>
<div la="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="{{url('/chat')}}">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author">Tarah Shropshire</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="{{url('/chat')}}">Voir tous les messages</a>
</div>
</div>
</div>
</div>
</div>

</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/select2.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>
