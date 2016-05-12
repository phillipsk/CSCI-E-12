<meta charset="utf-8" />
<meta name=viewport content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
<link rel="stylesheet" href="css/constitution.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.2/jquery.js"> </script>
<script type="text/javascript">
    $(document).ready(function(){
        var mybodyid = $('body').attr('id');
        var mynavid = 'li#' + mybodyid;
        console.log("mybodyid is " + mybodyid);
        console.log("mynavid is " + mynavid);
        $(mynavid).attr('id','iamhere');
    });
</script>
