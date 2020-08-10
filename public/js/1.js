
$("#search-mobile").on("click", function() {

    $keyword = $('#search_vacants_mobile').val();
    $category = $('#select_categories-mobile').val();
    $country = $('#country-mobile').val();
    $council = $('#cuncils-mobile').val();
    $city = $('#cities-mobile').val();
    $deadline = $('#deadline-mobile').val();
    $created = $('#created-mobile').val();




    if($keyword == "", $category == "", $country == "", $council == "", $city == "", $deadline == "", $created ==""){
        document.getElementById('info_test_mobile').className = 'test_show';
    }else{
        window.location = "/vacantes-de-trabajo/Palabra_clave=" + $keyword + "/" + $country + "/" + $council + "/" + $city + "/" + $deadline + "/" + $created + "/" + $category;
    }




});




