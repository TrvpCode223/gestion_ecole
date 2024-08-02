<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>École Maternelle - Modèle Admin Bootstrap</title>
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
<input class="form-control" type="text" placeholder="Chercher ici">
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
<p class="noti-details"><span class="noti-title">John Doe</span> vous suit maintenant </p>
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
<p class="noti-details"><span class="noti-title">Rolland Webber</span> a pris rendez-vous pour une réunion.</p>
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
<span>Admin</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.html">Mon Profil</a>
<a class="dropdown-item" href="{{url('/edit-profile')}}">Modifier le Profil</a>
<a class="dropdown-item" href="settings.html">Paramètres</a>
<a class="dropdown-item" href="{{url('/login')}}">Se Déconnecter</a>
</div>
</li>
</ul>
<div class="dropdown mobile-user-menu float-right"> 
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">Mon Profil</a>
<a class="dropdown-item" href="{{url('/edit-profile')}}">Modifier le Profil</a>
<a class="dropdown-item" href="settings.html">Paramètres</a>
<a class="dropdown-item" href="{{url('/login')}}">Se Déconnecter</a>
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
<span class="text-uppercase">Maternelle</span>
</a>
</div>
<ul class="sidebar-ul">
<li>
<a href="{{url('/index')}}" class="border-top-0"><i class="fas fa-home back-icon"></i> Retour à l'accueil</a>
</li>
<li class="menu-title">Groupes de Discussion <a href="#" class="add-user-icon" data-toggle="modal" data-target="#add_group"><i class="fas fa-plus"></i></a></li>
<li>
<a href="{{url('/chat')}}">#Général</a>
</li>
<li>
<a href="{{url('/chat')}}">#Enquête Vidéo Responsive</a>
</li>
<li>
<a href="{{url('/chat')}}">#500rs</a>
</li>
<li>
<a href="{{url('/chat')}}">#Entrepôt</a>
</li>
<li class="menu-title">Discussions Directes <a href="#" class="add-user-icon" data-toggle="modal" data-target="#add_chat_user"><i class="fas fa-plus"></i></a></li>
<li>
<a href="{{url('/chat')}}"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status online"></span></span> John Doe <span class="badge badge-pill bg-danger float-right">1</span></a>
</li>
<li>
<a href="{{url('/chat')}}"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status offline"></span></span> Richard Miles <span class="badge badge-pill bg-danger float-right">18</span></a>
</li>
<li>
<a href="{{url('/chat')}}"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status away"></span></span> John Smith</a>
</li>
<li class="active">
<a href="{{url('/chat')}}"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status online"></span></span> Mike Litorus <span class="badge badge-pill bg-danger float-right">108</span></a>
</li>
</ul>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="chat-main-row">
<div class="chat-main-wrapper">
<div class="col-lg-9 message-view task-view">
<div class="chat-window">
<div class="fixed-header">
<div class="navbar">
<div class="user-details mr-auto">
<div class="float-left user-img m-r-10">
<a href="profile.html" title="Mike Litorus"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
</div>
<div class="user-info float-left">
<a href="profile.html" title="Mike Litorus"><span class="font-bold">Mike Litorus</span> <i class="typing-text">Tape...</i></a>
<span class="Last-seen">Dernière connexion aujourd'hui à 7:50 AM</span>
</div>
</div>
<div class="search-box">
<div class="input-group input-group-sm">
<input type="text" class="form-control" placeholder="Chercher" required="">
<span class="input-group-append">
<button class="btn" type="button"><i class="fas fa-search"></i></button>
</span>
</div>
</div>
<ul class="nav custom-menu">
<li class="nav-item">
<a href="#chat_sidebar" class="nav-link task-chat profile-rightbar float-right"><i class="fas fa-user" aria-hidden="true"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" href="voice-call.html"><i class="fas fa-phone" aria-hidden="true"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" href="video-call.html"><i class="fas fa-video" aria-hidden="true"></i></a>
</li>
<li class="nav-item dropdown dropdown-action">
<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-cog"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="javascript:void(0)">Supprimer les conversations</a>
<a class="dropdown-item" href="javascript:void(0)">Paramètres</a>
</div>
</li>
</ul>
</div>
</div>
<div class="chat-contents">
<div class="chat-content-wrap">
<div class="chat-wrap-inner">
<div class="chat-box">
<div class="chats">
<div class="chat chat-right">
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<p>Bonjour. Que puis-je faire pour vous?</p>
<span class="chat-time">8:30 am</span>
</div>
</div>
</div>
</div>
<div class="chat-line">
<span class="chat-date">8 octobre 2015</span>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<p>Je regarde juste autour.</p>
<p>Voulez-vous me parler de vous?</p>
<span class="chat-time">8:35 am</span>
</div>
</div>
<div class="chat-bubble">
<div class="chat-content">
<p>Êtes-vous là? À ce moment-là!</p>
<span class="chat-time">8:40 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-right">
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<p>Où?</p>
<span class="chat-time">8:35 am</span>
</div>
</div>
<div class="chat-bubble">
<div class="chat-content">
<p>D'accord, je m'appelle Limingqiang. J'aime chanter, jouer au basket-ball, etc.</p>
<span class="chat-time">8:42 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<p>Vous attendez la notification.</p>
<span class="chat-time">8:30 am</span>
</div>
</div>
<div class="chat-bubble">
<div class="chat-content">
<p>Consectetuorem ipsum dolor sit?</p>
<span class="chat-time">8:50 am</span>
</div>
</div>
<div class="chat-bubble">
<div class="chat-content">
<p>D'accord?</p>
<span class="chat-time">8:55 am</span>
</div>
</div>
<div class="chat-bubble">
<div class="chat-content img-content">
<div class="chat-img-group clearfix">
<p>3 Images Téléchargées</p>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">placeholder.jpg</div>
<div class="chat-file-desc">842 KB</div>
</div>
</a>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">842 KB</div>
</div>
</a>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">placeholder.jpg</div>
<div class="chat-file-desc">842 KB</div>
</div>
</a>
</div>
<span class="chat-time">9:00 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-right">
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<p>D'accord!</p>
<span class="chat-time">9:00 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<p>3 fichiers téléchargés</p>
<ul class="attach-list">
<li><i class="fas fa-file"></i> <a href="#">exemple.avi</a></li>
<li><i class="fas fa-file"></i> <a href="#">activité.psd</a></li>
<li><i class="fas fa-file"></i> <a href="#">exemple.psd</a></li>
</ul>
</div>
</div>
<div class="chat-bubble">
<div class="chat-content">
<p>Consectetuorem ipsum dolor sit?</p>
<span class="chat-time">8:50 am</span>
</div>
</div>
<div class="chat-bubble">
<div class="chat-content">
<p>D'accord?</p>
<span class="chat-time">8:55 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-right">
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content img-content">
<div class="chat-img-group clearfix">
<p>6 Images Téléchargées</p>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">placeholder.jpg</div>
<div class="chat-file-desc">842 KB</div>
</div>
</a>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">842 KB</div>
</div>
</a>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">placeholder.jpg</div>
<div class="chat-file-desc">842 KB</div>
</div>
</a>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">placeholder.jpg</div>
<div class="chat-file-desc">842 KB</div>
</div>
</a>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">placeholder.jpg</div>
<div class="chat-file-desc">842 KB</div>
</div>
</a>
<a class="chat-img-attach" href="#">
<img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
<div class="chat-placeholder">
<div class="chat-img-name">placeholder.jpg</div>
<div class="chat-file-desc">842 KB</div>
</div>
</a>
</div>
<span class="chat-time">9:00 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<ul class="attach-list">
<li class="pdf-file"><i class="fas fa-file-pdf"></i> <a href="#">Document_2016.pdf</a></li>
</ul>
<span class="chat-time">9:00 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-right">
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<ul class="attach-list">
<li class="pdf-file"><i class="fas fa-file-pdf"></i> <a href="#">Document_2016.pdf</a></li>
</ul>
<span class="chat-time">9:00 am</span>
</div>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<p>En train de taper...</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="chat-footer">
<div class="message-bar">
<div class="message-inner">
<a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
<div class="message-area">
<div class="input-group">
<input type="text" class="form-control" value="Tapez un message...">
<span class="input-group-append">
<button class="btn btn-info" type="button"><i class="fas fa-paper-plane"></i></button>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="chat_sidebar">
<div class="chat-window video-window">
<div class="fixed-header">
<ul class="nav nav-tabs nav-tabs-bottom">
<li class="nav-item"><a class="nav-link" href="#calls_tab" data-toggle="tab">Appels</a></li>
<li class="nav-item"><a class="nav-link active" href="#profile_tab" data-toggle="tab">Profil</a></li>
</ul>
</div>
<div class="tab-content chat-contents">
<div class="content-full tab-pane" id="calls_tab">
<div class="chat-wrap-inner">
<div class="chat-box">
<div class="chats">
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<span class="task-chat-user">Vous</span> <span class="chat-time">8:35 am</span>
<div class="call-details">
<i class="material-icons">phone_missed</i>
<div class="call-info">
<div class="call-user-details">
<span class="call-description">Jeffrey Warden a manqué l'appel</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
<div class="call-details">
<i class="material-icons">call_end</i>
<div class="call-info">
<div class="call-user-details"><span class="call-description">Cet appel est terminé</span></div>
<div class="call-timing">Durée: <strong>5 min 57 sec</strong></div>
</div>
</div>
</div>
</div>
</div>
<div class="chat-line">
<span class="chat-date">29 janvier 2015</span>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<span class="task-chat-user">Richard Miles</span> <span class="chat-time">8:35 am</span>
<div class="call-details">
<i class="material-icons">phone_missed</i>
<div class="call-info">
<div class="call-user-details">
<span class="call-description">Vous avez manqué l'appel</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a href="profile.html" class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="chat-body">
<div class="chat-bubble">
<div class="chat-content">
<span class="task-chat-user">Vous</span> <span class="chat-time">8:35 am</span>
<div class="call-details">
<i class="material-icons">ring_volume</i>
<div class="call-info">
<div class="call-user-details">
<a href="#" class="call-description call-description--linked" data-qa="call_attachment_link">Appel en cours avec John Smith...</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="content-full tab-pane show active" id="profile_tab">
<div class="display-table">
<div class="table-row">
<div class="table-body">
<div class="table-content">
<div class="chat-profile-img">
<div class="edit-profile-img">
<img src="assets/img/user.jpg" alt="">
<span class="change-img">Changer l'image</span>
</div>
<h3 class="user-name m-t-10 m-b-0">John Doe</h3>
<small class="text-muted">Professeur de Maths</small>
<a href="{{url('/edit-profile')}}" class="btn btn-primary edit-btn"><i class="fas fa-pencil-alt"></i></a>
</div>
<div class="chat-profile-info">
<ul class="user-det-list">
<li>
<span>Nom d'utilisateur:</span>
<span class="float-right text-muted">johndoe</span>
</li>
<li>
<span>Date de Naissance:</span>
<span class="float-right text-muted">24 juillet</span>
</li>
<li>
<span>Email:</span>
<span class="float-right text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="660c090e0802090326031e070b160a034805090b">[email&#160;protégé]</a></span>
</li>
<li>
<span>Téléphone:</span>
<span class="float-right text-muted">973-584-58700</span>
</li>
</ul>
</div>
<div class="transfer-files">
<ul class="nav nav-tabs nav-tabs-solid nav-justified m-b-0">
<li class="nav-item"><a class="nav-link active" href="#all_files" data-toggle="tab">Tous les fichiers</a></li>
<li class="nav-item"><a class="nav-link" href="#my_files" data-toggle="tab">Mes fichiers</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="all_files">
<ul class="files-list">
<li>
<div class="files-cont">
<div class="file-type">
<span class="files-icon"><i class="fas fa-file-pdf"></i></span>
</div>
<div class="files-info">
<span class="file-name text-ellipsis">ABCs école Comité Parents-Professeurs Cas de Test.xls</span>
<span class="file-author"><a href="#">Loren Gatlin</a></span> <span class="file-date">31 mai à 18:53</span>
</div>
<ul class="files-action">
<li class="dropdown dropdown-action">
<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:void(0)">Télécharger</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Partager</a>
</div>
</li>
</ul>
</div>
</li>
</ul>
</div>
<div class="tab-pane" id="my_files">
<ul class="files-list">
<li>
<div class="files-cont">
<div class="file-type">
<span class="files-icon"><i class="fas fa-file-pdf"></i></span>
</div>
<div class="files-info">
<span class="file-name text-ellipsis">ABCs école Comité Parents-Professeurs Cas de Test.xls</span>
<span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">31 mai à 18:53</span>
</div>
<ul class="files-action">
<li class="dropdown dropdown-action">
<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:void(0)">Télécharger</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Partager</a>
</div>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="drag_files" class="modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Téléchargement par glisser-déposer</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body p-t-0">
<form id="js-upload-form">
<div class="upload-drop-zone" id="drop-zone">
<i class="fas fa-cloud-upload fa-2x"></i> <span class="upload-text">glissez-déposez simplement les fichiers ici</span>
</div>
<h4>Téléchargement</h4>
<ul class="upload-list">
<li class="file-list">
<div class="upload-wrap">
<div class="file-name">
<i class="fas fa-photo"></i> photo.png
</div>
<div class="file-size">1.07 gb</div>
<button type="button" class="file-close">
<i class="fas fa-times"></i>
</button>
</div>
<div class="progress progress-xs progress-striped">
<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
</div>
<div class="upload-process">37% fait</div>
</li>
<li class="file-list">
<div class="upload-wrap">
<div class="file-name">
<i class="fas fa-file"></i> exam.doc
</div>
<div class="file-size">5.8 kb</div>
<button type="button" class="file-close">
<i class="fas fa-times"></i>
</button>
</div>
<div class="progress progress-xs progress-striped">
<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
</div>
<div class="upload-process">37% fait</div>
</li>
<li class="file-list">
<div class="upload-wrap">
<div class="file-name">
<i class="fas fa-photo"></i> dashboard.png
</div>
<div class="file-size">2.1 mb</div>
<button type="button" class="file-close">
<i class="fas fa-times"></i>
</button>
</div>
<div class="progress progress-xs progress-striped">
<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
</div>
<div class="upload-process">Complété</div>
</li>
</ul>
</form>
<div class="m-t-30 text-center">
<button class="btn btn-primary btn-lg">Ajouter au téléchargement</button>
</div>
</div>
</div>
</div>
</div>
<div id="add_group" class="modal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Créer un groupe</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<p>Les groupes sont là où votre équipe communique. Ils sont meilleurs lorsqu'ils sont organisés autour d'un sujet - #prospects, par exemple.</p>
<form>
<div class="form-group">
<input type="text" class="form-control">
<label>Nom du groupe <span class="text-danger">*</span></label>
</div>
<div class="form-group">
<input type="text" class="form-control">
<label>Envoyer des invitations à: <span class="text-muted-light"></span></label>
</div>
</form>
</div>
</div>
</div>
</div>
<div id="add_chat_user" class="modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Créer un groupe de discussion</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<div class="input-group m-b-30">
<input placeholder="Rechercher pour commencer une discussion" class="form-control search-input" id="btn-input" type="text">
<span class="input-group-append">
<button class="btn btn-primary">Rechercher</button>
</span>
</div>
<div>
<h5>Conversations Récentes</h5>
<ul class="chat-user-list">
<li>
<a href="#">
<div class="media">
<span class="avatar align-self-center">J</span>
<div class="media-body align-self-center text-nowrap">
<div class="user-name">Jeffery Lalor</div>
<span class="designation">H.O.D</span>
</div>
<div class="text-nowrap align-self-center">
<div class="online-date">il y a 1 jour</div>
</div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="media ">
<span class="avatar align-self-center">B</span>
<div class="media-body align-self-center text-nowrap">
<div class="user-name">Bernardo Galaviz</div>
<span class="designation">Professeur de Science</span>
</div>
<div class="align-self-center text-nowrap">
<div class="online-date">il y a 3 jours</div>
</div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="media">
<span class="avatar align-self-center">
<img src="assets/img/user.jpg" alt="John Doe">
</span>
<div class="media-body text-nowrap align-self-center">
<div class="user-name">John Doe</div>
<span class="designation">Professeur de Maths</span>
</div>
<div class="align-self-center text-nowrap">
<div class="online-date">il y a 7 mois</div>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="m-t-50 text-center">
<button class="btn btn-primary btn-lg">Créer un groupe</button>
</div>
</div>
</div>
</div>
</div>
<div id="share_files" class="modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Partager le fichier</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<div class="files-share-list">
<div class="files-cont">
<div class="file-type">
<span class="files-icon"><i class="fas fa-file-pdf"></i></span>
</div>
<div class="files-info">
<span class="file-name text-ellipsis">AHA Selfcare Application Mobile Cas de Test.xls</span>
<span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">31 mai à 18:53</span>
</div>
</div>
</div>
<div class="form-group">
<label>Partager avec</label>
<input class="form-control" type="text">
</div>
<div class="m-t-50 text-center">
<button class="btn btn-primary btn-lg">Partager</button>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>
