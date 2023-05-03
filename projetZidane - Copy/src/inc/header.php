<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    

  
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqPlot/1.0.9/jquery.jqplot.min.js" integrity="sha512-FQKKXM+/7s6LVHU07eH2zShZHunHqkBCIcDqodXfdV/NNXW165npscG8qOHdxVsOM4mJx38Ep1oMBcNXGB3BCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type='text/javascript' src="https://cdn.rawgit.com/abdmob/x2js/master/xml2json.js"></script>
  
  <script type="text/javascript" src="jqplot/jquery.jqplot.js"></script>
        <script type="text/javascript" src="jqplot/plugins/jqplot.barRenderer.js"></script>
        <script type="text/javascript" src="jqplot/plugins/jqplot.pieRenderer.js"></script>
        <script type="text/javascript" src="jqplot/plugins/jqplot.categoryAxisRenderer.js"></script>
        <script type="text/javascript" src="jqplot/plugins/jqplot.pointLabels.js"></script>
        <link rel="stylesheet" type="text/css" href="jqplot/jquery.jqplot.css" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin = "anonymous">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">    
   <link rel="stylesheet" href="header.css">
   <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="register.css">
    <title><?= $title ?? 'Home' ?></title>
</head>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');
<body>

    <?php include_once('nav.php') ?>
    <?php flash() ?>
