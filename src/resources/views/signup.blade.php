<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
  src="https://kit.fontawesome.com/64d58efce2.js"
  crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in to Algerian Robot Cup </title>
  @livewireStyles

</head>
<body>
  <form id="main-form" method="POST" action="{{ url('signup') }}">
    @csrf
    <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <div  class="form sign-in-form">
          <h2 class="title">S'inscrire</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input value="{{ old('leader_name') }}" name="leader_name" type="text" placeholder="Nom du chef d'équipe" /> 
          </div>
          <div class="input-field">
            <i class="fas fa-at"></i>
            <input value="{{ old('email') }}" name="email" type="text" placeholder="e-mail" />
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input value="{{ old('phone_1') }}" name="phone_1" type="text" placeholder="Numéro de téléphone 1"/>
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input value="{{ old('phone_2') }}" name="phone_2" type="text" placeholder="Ajoutez un 2éme numéro"/>
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input value="{{ old('adress') }}" name="adress" type="text" placeholder="Vous êtes de quelle wilaya?"/>
          </div>
          <div class="input-field">
              <i class="fa fa-graduation-cap"></i>
              <input value="{{ old('Niveau_etude') }}" name="Niveau_etude" type="text" placeholder="Niveau d'étude et spécialité" />
            </div>
          <select>
    <option value="0">Selectionnez la wilaya de participation</option>
    <option value="Alger">Alger</option>
    <option value="Skikda">Skikda</option>
    <option value="Sidi Bel Abbes">Sidi Be Abbes</option>
    <option value="Ghardaia">Ghardaia</option>
    <option value="Biskra">Biskra</option>
  </select>
   <div class="input-field">
              <i class="fas fa-user"></i>
              <input value="{{ old('membre_2') }}" name="membre_2" type="text" placeholder="Nom du membre 2" />
            </div>
               <div class="input-field">
              <i class="fa fa-graduation-cap"></i>
              <input value="{{ old('Niv_etude_2') }}" name="Niv_etude_2" type="text" placeholder="Niveau d'étude et spécialité" />
            </div>
          <button class="btn transparent" id="sign-up-btn" onclick="return false">
            Suivant
          </button>
        </div>
        <div class="form sign-up-form">

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input value="{{ old('member_3') }}" name="member_3" type="text" placeholder="Nom du membre 3" />
          </div>
          <div class="input-field">
              <i class="fa fa-graduation-cap"></i>
              <input value="{{ old('Niv_etude_3') }}" name="Niv_etude_3" type="text" placeholder="Niveau d'étude et spécialité" />
            </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input value="{{ old('member_4') }}" name="member_4" type="text" placeholder="Nom du membre 4" />
          </div>
          <div class="input-field">
              <i class="fa fa-graduation-cap"></i>
              <input value="{{ old('Niv_etude_4') }}" name="Niv_etude_4" type="text" placeholder="Niveau d'étude et spécialité" />
            </div>
            
          <div class="input-field">
            <i class="fas fa-sort-numeric-up-alt"></i>
            <input class="changesize" value="{{ old('participations_number') }}" name="participations_number" type="number" placeholder="Nombre de participation aux competitions?"/>
          </div>
          <div class="input-field">
            <i class="fas fa-text-width"></i>
            <input value="{{ old('skills') }}" name="skills" type="text" placeholder="Listez vos compétences" />
          </div>
          <textarea value="{{ old('project') }}" name="project" type="text" placeholder="Citez les projts que vous avez réalisé dans le domaine électronique ou informaique"></textarea>
          <div class="try" style="position: relative">
           <button type="button" class="btn transparent" id="sign-in-btn">
              Précédent
            </button>
          <button type="submit" class="btn" form="main-form">Appliquer</button>
          <!-- <input type="submit" class="btn" value="appliquer" /> -->
          </div>
        </div>
    </div>
    </div>
  </form>
  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>Nouveau ici ?</h3>
        <p>
          Bienvenue ! à la plus grande compétition nationale, algérienne de la robotique <a href="index.html"> "ALGERIAN ROBOT CUP" </a> &#9872; .
        </p>
        <a href="https://drive.google.com/file/d/1ONOcOZnKGAeTlkVeXygcjO2UoRti8AzD/view?usp=sharing" >  
          <button class="lire transparent" style="width: 150px; font-size: 10px;">
            Lire les instructions 
          </button> </a>

        </div>
        <img src="img/ARC_logo_1background.svg" class="image" alt="" style="height: 250px" /> 
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Nouveau ici ?</h3>
          <p>
            Veuillez remplir soigneusement le formulaire d'inscription. <br>
            Pour plus de détails, veuillez nous contacter via l'adresse e-mail suivante : <br>
            <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" rel="noopener noreferrer">usthb.celec@gmail.com</a>
          </p>

        </div>
        <img src="img/ARC_logo_1background.svg" class="image" alt="" style="height: 250px" />
      </div>
    </div>
  </div>

  @livewireScripts
  <script src="app.js"></script>
  @stack('scripts')
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>
