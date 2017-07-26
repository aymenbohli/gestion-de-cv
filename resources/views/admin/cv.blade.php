<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('cv/plugins/bootstrap/css/bootstrap.min.css') }}">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('cv/plugins/font-awesome/css/font-awesome.css') }}">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('cv/css/styles.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
   
    <div class="wrapper">
        <div class="sidebar-wrapper">
    
   
            <div class="profile-container">
                <img class="profile" src="{{ asset('Uploads/images') }}/{!! $user->photo !!}" alt="" />
                <h1 class="name">{!! $user->name !!}</h1>
                <h3 class="tagline">{{ $name = substr(\App\Models\Admin\domaine::where('id', $user->domaine)->pluck('name'),2,-2) }}</h3>
            </div><!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="">{!! $user->email !!}</a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="">{!! $user->numtel !!}</a></li>
                </ul>
            </div><!--//contact-container-->
 
            <div class="education-container container-block">
                <h2 class="container-block-title">Formation</h2>
               @foreach($formations as $formations)
                <div class="item">
                        <h4 class="degree">{!! $formations->name !!}</h4>
                        <h5 class="meta">{!! $formations->governorat !!}</h5>
                        <div class="time">{!! $formations->periode !!}</div>
                    </div>
                @endforeach
               
            </div><!--//education-container-->
            <div class="interests-container container-block">
                <h2 class="container-block-title">centre interets</h2>
                <ul class="list-unstyled interests-list">
                   @foreach($centreinterets as $centreinterets)
                     <li>{!! $centreinterets->name !!} : {!! $centreinterets->type !!}</li>
                    @endforeach
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                @foreach($experience as $experience)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{!! $experience->type !!}</h3>
                            <div class="time">{!! $experience->duree !!} - MOIS</div>
                        </div><!--//upper-row-->
                        <div class="company">{!! $experience->entreprise !!} {!! $experience->governorat !!}</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>{!! $experience->descreption !!}</p>   
                    </div><!--//details-->
                </div><!--//item-->
                @endforeach
            </section><!--//section-->
            
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Compétence</h2>
                <div class="skillset"> 
                    @foreach($competences as $competences)
               <div class="item">
                        <h3 class="level-title">{!! $competences->name !!}</h3>
                        <p>{!! $competences->descreption !!}</p>
                    </div><!--//item-->                       
                @endforeach
                   
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

