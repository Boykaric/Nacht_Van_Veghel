<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>

    <script>

    //  javascript function to show modals

    $(document).ready(function () {
      $('.btn-ikdoemee').on('click', function () {
        $('#IkDoeMeeModal').modal('show')
      });

      $('.btn-ikkomkijken').on('click', function () {
        $('#IkKomKijkenModal').modal('show')
      });
    }); 


    </script>

    <div class="container">
    <h1> Aanwezigheid </h1>

    <!-- Button trigger voor de Ik Doe Mee modal -->
  <button type="button" class="btn btn-primary btn-ikdoemee" data-bs-toggle="modal" data-bs-target="#IkDoeMeeModal">
    Ik doe mee!
  </button>

  <!-- Modal Ik Doe Mee ! -->
  <div class="modal fade" id="IkDoeMeeModal" tabindex="-1" aria-labelledby="IkDoeMeeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inschrijving</h1>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        </div>
        <div class="modal-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="leerlingnummer"> Leerlingnummer: </label>
              <input type="text" id="leerlingnummer" placeholder="00#####"> 
            </div>
            <div class="form-group">
              <label for="naam"> Naam: </label>
              <input type="text" id="naam" placeholder="Naam"> 
            </div>
            <div class="form-group">
              <label for="achternaam"> Achternaam: </label>
              <input type="text" id="achternaam" placeholder="Achternaam"> 
            </div>
            <div class="form-group">
              <label for="email"> Email: </label>
              <input type="text" id="email" placeholder="example@example.nl"> 
            </div>
            <div class="form-group">
              <label for="frietkar"> Frietkar: </label>
              <select class="form-group">
                <option value="True"> Ja </option>
                <option value="False"> Nee </option>
            </select>
            </div>
            <div class="form-group">
              <label for="lokaal"> Lokaal: </label>
              <select class="form-group">
                <option value=""> 1 </option>
                <option value=""> 2 </option>
            </select>
            </div>
            </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
            <button type="button" class="btn btn-primary">Inschrijven</button>
        </div>
        <div class="modal-footer">
          <p> Mocht je mee willen doen met een van onze toernooien, join onze <a href="#"> discord! </a> </p>
        </div>
      </div>
    </div>
  </div>

  <!----------------------------------------------------------------------------------------------------------------------------->
  
  <!-- Button trigger voor de Ik Kom Kijken Modal -->
  <button type="button" class="btn btn-primary btn-ikkomkijken" data-bs-toggle="modal" data-bs-target="#IkKomKijkenModal">
    Ik kom kijken!
  </button>

  <!-- De Ik Kom Kijken Modal -->
  <div class="modal fade" id="IkKomKijkenModal" tabindex="-1" aria-labelledby="IkKomKijkenModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inschrijving</h1>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        </div>
        <div class="modal-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="leerlingnummer"> Leerlingnummer: </label>
              <input type="text" id="leerlingnummer" placeholder="00#####"> 
            </div>
            <div class="form-group">
              <label for="naam"> Naam: </label>
              <input type="text" id="naam" placeholder="Naam"> 
            </div>
            <div class="form-group">
              <label for="achternaam"> Achternaam: </label>
              <input type="text" id="achternaam" placeholder="Achternaam"> 
            </div>
            <div class="form-group">
              <label for="email"> Email: </label>
              <input type="text" id="email" placeholder="example@example.nl"> 
            </div>
            </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
            <button type="button" class="btn btn-primary">Inschrijven</button>
        </div>

      </div>
    </div>
  </div>
  </div>
  </body>
</html>