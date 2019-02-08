
<?php
 include("QazLatynHelper.php");
 $cyrlText = "";
 $latynText= "";
  if(isset($_REQUEST["cyrlText"]) && $_REQUEST["cyrlText"] != ""){
    $cyrlText = $_REQUEST["cyrlText"];
    $latynText = QazLatynHelper::Cyrl2Latyn($cyrlText);
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>QazLatynHelper</title>
    <style>
        .box {
            padding: 15px;
            text-align: center;
        }

        textarea {
            display: block;
            width: 500px;
            margin: auto;
            text-align: left;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        button {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            margin: .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="box">
       <form action="<?php $_PHP_SELF ?>" method = "POST">
        <textarea id="data" name="cyrlText" rows="10"><?php echo $cyrlText; ?></textarea>
        <button type="submit" id="convert"> Cyrl >> Latyn </button>
        <textarea id="dest" class="latynText" rows="10"><?php echo $latynText; ?></textarea>
       </form>
    </div>
</body>
</html>