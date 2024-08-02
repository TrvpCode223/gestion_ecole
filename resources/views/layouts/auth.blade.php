<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Prescolaire</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/assets/img/favicon.png') }}">

<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/fullcalendar.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
<p class="noti-time"><span class="notification-time">il y a 4 minutes</span></p>
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
<p class="noti-time"><span class="notification-time">il y a 6 minutes</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">L</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Misty Tison</span> a aimé votre photo.</p>
<p class="noti-time"><span class="notification-time">il y a 8 minutes</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">G</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> a pris un rendez-vous pour une réunion.</p>
<p class="noti-time"><span class="notification-time">il y a 12 minutes</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('/activities')}}">
<div class="media">
<span class="avatar">T</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> a aimé votre photo.</p>
<p class="noti-time"><span class="notification-time">il y a 2 jours</span></p>
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
<span>{{$user->nom}}</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="{{url('/profile')}}">Mon Profil</a> 
<a class="dropdown-item" href="{{url('/edit-profile')}}">Modifier le Profil</a> 
<a class="dropdown-item" href="settings.html">Paramètres</a>
<a class="dropdown-item" href="{{url('/')}}">Se Déconnecter</a>
</div>
</li>
</ul>
<div class="dropdown mobile-user-menu float-right"> 
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="{{url('/profile')}}">Mon Profil</a>
<a class="dropdown-item" href="{{url('/edit-profile')}}">Modifier le Profil</a>
<a class="dropdown-item" href="{{url('/settings')}}">Paramètres</a>
<a class="dropdown-item" href="{{url('/')}}">Se Déconnecter</a>
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
<span class="text-uppercase">Prescolaire</span>
</a>
</div>
<ul class="sidebar-ul">
<li class="menu-title">Menu</li>
<li class="active">
<a href="{{url('/index')}}"><img src="assets/img/sidebar/icon-1.png" alt="icon"><span>Tableau de Bord</span></a>
<li class="submenu">
    <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Professeurs</span> <span class="menu-arrow"></span></a>
    <ul class="list-unstyled" style="display: none;">
        <li><a href="{{ url('/all-teachers') }}"><span>Tous les Professeurs</span></a></li>
        <li><a href="{{ url('/add-teacher') }}"><span>Ajouter Professeur</span></a></li>
        <li><a href="{{ url('/edit-teacher') }}"><span>Modifier Professeur</span></a></li>
        <li><a href="{{ url('/about-teacher') }}"><span>À propos du Professeur</span></a></li>
    </ul>
</li>

</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-3.png" alt="icon"> <span> Étudiants</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-students.html"><span>Tous les Étudiants</span></a></li>
<li><a href="add-student.html"><span>Ajouter Étudiant</span></a></li>
<li><a href="edit-student.html"><span>Modifier Étudiants</span></a></li>
<li><a href="about-student.html"><span>À propos de l'Étudiant</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-4.png" alt="icon"> <span> Parents</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-parents.html"><span>Tous les Parents</span></a></li>
<li><a href="add-parent.html"><span>Ajouter Parent</span></a></li>
<li><a href="edit-parent.html"><span>Modifier Parent</span></a></li>
<li><a href="about-parent.html"><span>À propos du Parent</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/sidebar/icon-5.png" alt="icon"> <span>Apps</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"><span>Email</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="{{url('/compose')}}"><span>Composer un Email</span></a></li>
<li>
<a hhref="{{url('/inbox')}}"> <span> Boîte de Réception</span> </a>
</li>
<li><a href="mail-view.html"><span>Voir Email</span></a></li>
</ul>
</li>
<li>
<a href="{{url('/chat')}}"> Chat <span class="badge badge-pill bg-primary float-right">5</span></a>
</li>
<li class="submenu">
<a href="#"><span> Appels</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="voice-call.html"><span>Appel Vocal</span></a></li>
<li><a href="video-call.html"><span>Appel Vidéo</span></a></li>
<li><a href="incoming-call.html"><span>Appel Entrant</span></a></li>
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
<a href="{{url('/exam-list.html')}}"><img src="assets/img/sidebar/icon-7.png" alt="icon"> <span>Liste des Examens</span></a>
</li>
<li>
<a href="holidays.html"><img src="assets/img/sidebar/icon-8.png" alt="icon"> <span>Vacances</span></a>
</li>
<li>
<a href="calendar.html"><img src="assets/img/sidebar/icon-9.png" alt="icon"><span> Événements</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-10.png" alt="icon"><span> Comptabilité </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="{{url('/invoices')}}"><span>Factures</span></a></li>
<li><a href="{{url('/payments')}}"><span>Paiements</span></a></li>
<li><a href="expenses.html"><span>Dépenses</span></a></li>
<li><a href="provident-fund.html"><span>Fonds de Prévoyance</span></a></li>
<li><a href="taxes.html"><span>Taxes</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-11.png" alt="icon"><span> Paie </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="{{url('/salary')}}"><span> Salaire des Employés </span></a></li>
<li><a  href="{{url('/salary-view')}}"><span> Fiche de Paie </span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-12.png" alt="icon"> <span> Blog</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="blog.html"><span>Blog</span></a></li>
<li><a href="blog-details.html"><span>Voir Blog</span></a></li>
<li><a href="add-blog.html"><span>Ajouter Blog</span></a></li>
<li><a href="edit-blog.html"><span>Modifier Blog</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);" class="noti-dot"><img src="assets/img/sidebar/icon-13.png" alt="icon"> <span>Gestion </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="#"><span> Employés</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-employees.html"><span>Tous les Employés</span></a></li>
<li><a href="holidays.html"><span>Vacances</span></a></li>
<li><a href="leaves.html"><span>Demandes de Congé</span> <span class="badge badge-pill bg-primary float-right">1</span></a></li>
<li><a href="attendance.html"><span>Présences</span></a></li>
<li><a href="departments.html"><span>Départements</span></a></li>
<li><a href="designations.html"><span>Désignations</span></a></li>
</ul>
</li>
<li>
<a href="{{url('/activities')}}"><span>Activités</span></a>
</li>
<li>
<a href="{{url('/users')}}"><span>Utilisateurs</span></a>
</li>
<li class="submenu">
<a href="#"><span> Rapports </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="expense-reports.html"> <span>Rapport de Dépenses </span></a></li>
<li><a href="invoice-reports.html"> <span>Rapport de Factures</span> </a></li>
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
<li><a href="uikit.html"><span>UI Kit</span></a></li>
<li><a href="typography.html"><span>Typographie</span></a></li>
<li><a href="tabs.html"><span>Onglets</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-26.png" alt="icon"> <span> Éléments</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="sweetalerts.html">Sweet Alerts</a></li>
<li><a href="tooltip.html">Info-bulle</a></li>
<li><a href="popover.html">Popover</a></li>
<li><a href="ribbon.html">Ruban</a></li>
<li><a href="clipboard.html">Presse-papiers</a></li>
<li><a href="drag-drop.html">Glisser-Déposer</a></li>
<li><a href="rangeslider.html">Curseur de Plage</a></li>
<li><a href="rating.html">Évaluation</a></li>
<li><a href="toastr.html">Toastr</a></li>
<li><a href="text-editor.html">Éditeur de Texte</a></li>
<li><a href="counter.html">Compteur</a></li>
<li><a href="scrollbar.html">Barre de Défilement</a></li>
<li><a href="spinner.html">Spinner</a></li>
<li><a href="notification.html">Notification</a></li>
<li><a href="lightbox.html">Lightbox</a></li>
<li><a href="stickynote.html">Note Autocollante</a></li>
<li><a href="timeline.html">Chronologie</a></li>
<li><a href="horizontal-timeline.html">Chronologie Horizontale</a></li>
<li><a href="form-wizard.html">Assistant de Formulaire</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-27.png" alt="icon"> <span> Graphiques</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="chart-apex.html">Apex Graphiques</a></li>
<li><a href="chart-js.html">Chart Js</a></li>
<li><a href="chart-morris.html">Morris Graphiques</a></li>
<li><a href="chart-flot.html">Flot Graphiques</a></li>
<li><a href="chart-peity.html">Peity Graphiques</a></li>
<li><a href="chart-c3.html">C3 Graphiques</a></li>
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
<li><a href="icon-weather.html">Icônes Météo</a></li>
<li><a href="icon-typicon.html">Icônes Typicon</a></li>
<li><a href="icon-flag.html">Icônes de Drapeau</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-17.png" alt="icon"> <span> Formulaires</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="basic-inputs.html"><span>Entrées de Base</span></a></li>
<li><a href="form-basic-inputs.html"><span>Entrées de Base</span></a></li>
<li><a href="form-input-groups.html"><span>Groupes d'Entrées</span></a></li>
<li><a href="form-horizontal.html"><span>Formulaire Horizontal</span></a></li>
<li><a href="form-vertical.html"><span>Formulaire Vertical</span></a></li>
<li><a href="form-validation.html"> Validation de Formulaire </a></li>
<li><a href="form-select2.html">Formulaire Select2 </a></li>
<li><a href="form-fileupload.html">Téléchargement de Fichier </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-18.png" alt="icon"> <span> Tableaux</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="tables-basic.html"><span>Tableaux de Base</span></a></li>
<li><a href="tables-datatables.html"><span>Tableau de Données</span></a></li>
</ul>
</li>
<li class="menu-title"><span>Extras</span></li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-19.png" alt="icon"> <span>Pages</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="{{url('/login')}}"> <span>Connexion </span></a></li>
<li><a href="register.html"><span> Inscription </span></a></li>
<li><a href="forgot-password.html"> <span>Mot de Passe Oublié</span> </a></li>
<li><a href="change-password2.html"> <span>Changer de Mot de Passe</span> </a></li>
<li><a href="lock-screen.html"> <span>Écran de Verrouillage </span></a></li>
<li><a href="profile.html"> <span>Profil</span> </a></li>
<li><a href="gallery.html"> <span>Galerie </span></a></li>
<li><a href="error-404.html"><span>Erreur 404 </span></a></li>
<li><a href="error-500.html"><span>Erreur 500 </span></a></li>
<li><a href="blank-page.html"><span> Page Blanche</span> </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/sidebar/icon-20.png" alt="icon"> <span>Multi-Niveaux</span> <span class="menu-arrow"></span></a>
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
<div class="col-md-6">
<h3 class="page-title mb-0">Tableau de Bord</h3>
</div>
<div class="col-md-6">
<ul class="breadcrumb mb-0 p-0 float-right">
<li class="breadcrumb-item"><a href="{{url('/index')}}"><i class="fas fa-home"></i> Accueil</a></li>
<li class="breadcrumb-item"><span>Tableau de Bord</span></li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<span class="float-left"><img src="assets/img/dash/dash-1.png" alt="" width="80"></span>
<div class="dash-widget-info text-right">
<span>Étudiants</span>
<h3>60,000</h3>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<div class="dash-widget-info text-left d-inline-block">
<span>Professeurs</span>
<h3>12,000</h3>
</div>
<span class="float-right"><img src="assets/img/dash/dash-2.png" width="80" alt=""></span>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<span class="float-left"><img src="assets/img/dash/dash-3.png" alt="" width="80"></span>
<div class="dash-widget-info text-right">
<span>Parents</span>
<h3>20,000</h3>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<div class="dash-widget-info d-inline-block text-left">
<span>Total des Gains</span>
<h3>12,000,000 FCFA</h3>
</div>
<span class="float-right"><img src="assets/img/dash/dash-4.png" alt="" width="80"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Enquête des Étudiants
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
 <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="chart1"></div>
</div>
</div>
</div>
<div class="col-lg-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Performance des Étudiants
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="chart2"></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Événements
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="calendar" class=" overflow-hidden"></div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Total des Membres
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body d-flex align-items-center justify-content-center overflow-hidden">
<div id="chart3"> </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Revenu Mensuel
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="chart4"></div>
</div>
</div>
</div>
<div class="col-lg-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Liste des Examens
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Nom de l'Examen </th>
<th>Matière</th>
<th>Classe</th>
<th>Section</th>
<th>Heure</th>
<th>Date</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a href="{{url('/exam-detail.html')}}" class="avatar bg-green">C</a>
</td>
<td>Anglais</td>
<td>5</td>
<td>B</td>
<td>10h00</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="{{url('/exam-detail.html')}}" class="avatar bg-purple">C</a>
</td>
<td>Anglais</td>
<td>4</td>
<td>A</td>
<td>10h00</td>
<td>2/1/2019</td>
<td class="text-right">
<a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="{{url('/exam-detail.html')}}" class="avatar bg-green">C</a>
</td>
<td>Mathématiques</td>
<td>6</td>
<td>B</td>
<td>10h00</td>
<td>2/1/2019</td>
<td class="text-right">
<a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="{{url('/exam-detail.html')}}" class="avatar bg-dark">C</a>
</td>
<td>Sciences</td>
<td>3</td>
<td>B</td>
<td>10h00</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="{{url('/exam-detail.html')}}" class="avatar bg-green">C</a>
</td>
<td>Mathématiques</td>
<td>6</td>
<td>B</td>
<td>10h00</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="{{url('/exam-detail.html')}}" class="avatar bg-dark">C</a>
</td>
<td>Anglais</td>
<td>7</td>
<td>B</td>
<td>10h00</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="{{url('/exam-detail.html')}}" class="avatar bg-purple">C</a>
</td>
<td>Sciences</td>
<td>5</td>
<td>B</td>
<td>10h00</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
<i la far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i la far fa-trash-alt"></i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col-sm-6">
<div class="page-title">
Tous les Étudiants
</div>
</div>
<div class="col-sm-6 text-sm-right">
<div class="mt-sm-0 mt-2">
<button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png" alt=""><span class="ml-2">Excel</span></button>
<button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></button>
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Nom</th>
<th>ID étudiant</th>
<th>Classe</th>
<th>Section</th>
<th>Mobile</th>
<th>Date de naissance</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-1.jpg" alt=""></a><a href="profile.html">Parker <span></span></a></h2>
</td>
<td>ST-0d001</td>
<td>1</td>
<td>UN</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-2.jpg" alt=""></a><a href="profile.html">Smith <span></span></a></h2>
</td>
<td>ST-0d002</td>
<td>2</td>
<td>B</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-3.jpg" alt=""></a><a href="profile.html">Hensley <span></span></a></h2>
</td>
<td>ST-0d003</td>
<td>1</td>
<td>UN</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-4.jpg" alt=""></a><a href="profile.html">Frisons <span></span></a></h2>
</td>
<td>ST-0d004</td>
<td>1</td>
<td>UN</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-5.jpg" alt=""></a><a href="profile.html">Jackson <span></span></a></h2>
</td>
<td>ST-0d005</td>
<td>1</td>
<td>UN</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-6.jpg" alt=""></a><a href="profile.html">Le maçon <span></span></a></h2>
</td>
<td>ST-0d006</td>
<td>1</td>
<td>UN</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-7.jpg" alt=""></a><a href="profile.html">Garrett <span></span></a></h2>
</td>
<td>ST-0d007</td>
<td>1</td>
<td>UN</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col-sm-6">
<div class="page-title">
Nouveaux Étudiants
</div>
</div>
<div class="col-sm-6 text-sm-right">
<div class="mt-sm-0 mt-2">
<button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png" alt=""><span class="ml-2">Excel</span></button>
<button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></button>
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Une autre action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Nom</th>
<th>ID étudiant</th>
<th>Nom du parent</th>
<th>Mobile</th>
<th>Adresse</th>
<th>Date d'admission</th>
<th>Frais reçus</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-1.jpg" alt=""></a><a href="profile.html">Parker <span></span></a></h2>
</td>
<td>ST-0d001</td>
<td>M. Johnson</td>
<td>973-584-58700</td>
<td>9946, chemin Baker. Marysville,</td>
<td>20/1/2021</td>
<td><a href="#"><i class="fas fa-file-pdf text-danger"></i></a></td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-2.jpg" alt=""></a><a href="profile.html">Smith <span></span></a></h2>
</td>
<td>ST-0d002</td>
<td>M. Luke Idaman</td>
<td>973-584-58700</td>
<td>193 S. Harrison Drive</td>
<td>20/1/2021</td>
<td><a href="#"><i class="fas fa-file-pdf text-danger"></i></a></td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-3.jpg" alt=""></a><a href="profile.html">Hensley <span></span></a></h2>
</td>
<td>ST-0d003</td>
<td>M. Kevin H</td>
<td>973-584-58700</td>
<td>8949, rue Golf. Côte des Palmiers</td>
<td>20/1/2021</td>
<td><a href="#"><i class="fas fa-file-pdf text-danger"></i></a></td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-4.jpg" alt=""></a><a href="profile.html">Frisons <span></span></a></h2>
</td>
<td>ST-0d004</td>
<td>M. Randy O</td>
<td>973-584-58700</td>
<td>23 Cour de l'Ohio Alexandrie</td>
<td>20/1/2021</td>
<td><a href="#"><i class="fas fa-file-pdf text-danger"></i></a></td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-5.jpg" alt=""></a><a href="profile.html">Jackson <span></span></a></h2>
</td>
<td>ST-0d005</td>
<td>M. Steven</td>
<td>973-584-58700</td>
<td>338, chemin North Cleveland</td>
<td>20/1/2021</td>
<td><a href="#"><i class="fas fa-file-pdf text-danger"></i></a></td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-6.jpg" alt=""></a><a href="profile.html">Le maçon <span></span></a></h2>
</td>
<td>ST-0d006</td>
<td>M. Ervin</td>
<td>973-584-58700</td>
<td>7909 W. Rue Sunnyslope</td>
<td>20/1/2021</td>
<td><a href="#"><i class="fas fa-file-pdf text-danger"></i></a></td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="assets/img/profile/img-7.jpg" alt=""></a><a href="profile.html">Garrett <span></span></a></h2>
</td>
<td>ST-0d007</td>
<td>M. Marquz</td>
<td>973-584-58700</td>
<td>7361, rue Dunbar</td>
<td>20/1/2021</td>
<td><a href="#"><i class="fas fa-file-pdf text-danger"></i></a></td>
<td class="text-right">
<a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
</tbody>
</table>
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


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>
 
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/jquery.fullcalendar.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/js/apexcharts.js"></script>
<script src="assets/js/chart-data.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>
