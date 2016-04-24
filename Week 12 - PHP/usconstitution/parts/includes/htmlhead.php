<meta charset="utf-8" />
<meta name=viewport content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
<link rel="stylesheet" href="css/constitution.css" />
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/jquery-1.12.2.min.js"> </script>
<script type="text/javascript">
    $(document).ready(function(){
        var mybodyid = $('body').attr('id');
        var mynavid = '#nav' + mybodyid;
        /* e.g. for 3.shtml:
         mybodyid is 'part3'
         mynavid  is '#navpart3'
         */
        console.log("mybodyid is " + mybodyid);
        console.log("mynavid is " + mynavid);
        $(mynavid).attr('id','iamhere');
    });
</script>
