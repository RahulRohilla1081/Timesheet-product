<!DOCTYPE html>
<html>
<head>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Popper Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/hierarchy-select.min.css">

<!-- Hierarchy Select Js -->
<script src="js/hierarchy-select.min.js"></script>
</head>
<body>
  <div class="dropdown hierarchy-select" id="example">
    <button type="button" class="btn btn-secondary dropdown-toggle" id="example-two-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    <div class="dropdown-menu" aria-labelledby="example-two-button">
        <div class="hs-searchbox">
            <input type="text" class="form-control" autocomplete="off">
        </div>
        <selec class="hs-menu-inner">
            <a class="dropdown-item" data-value="" data-default-selected="" href="#">All colors</a>
            <a class="dropdown-item" data-value="1" href="#">Red</a>
            <a class="dropdown-item" data-value="2" href="#">Orange</a>
            <a class="dropdown-item" data-value="3" href="#">Yellow</a>
            <a class="dropdown-item" data-value="4" href="#">Green</a>
            <a class="dropdown-item" data-value="5" href="#">Blue</a>
            <a class="dropdown-item" data-value="6" href="#">Purple</a>
            <a class="dropdown-item" data-value="7" href="#">Pink</a>
            <a class="dropdown-item" data-value="8" href="#">Brown</a>
            <a class="dropdown-item" data-value="9" href="#">Black</a>
            <a class="dropdown-item" data-value="10" href="#">Grey</a>
            <a class="dropdown-item" data-value="11" href="#">White</a>
        </div>
    </div>
    <input class="d-none" name="example_two" readonly="readonly" aria-hidden="true" type="text"/>
</div>

<script>
 $(document).ready(function(){
    $('#example').hierarchySelect({
    hierarchy: false,
    width: 'auto'
   });
});

</body>
</html>