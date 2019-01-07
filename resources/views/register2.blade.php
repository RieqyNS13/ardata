<html>
<head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo asset("css/kube.min.css"); ?>" />

</head>
<body style="width:80%;margin:40px auto">
    <div class="units-container">

{{ Form::open(array('url' => 'validasi')) }}
            <h3>Form Input </h3>
			 <label>
                Username <?php echo $errors->first('Username'); ?>
               {{Form::text('username')}}
            </label>
            <label>
                Nama <?php echo $errors->first('nama'); ?>
               {{Form::text('nama')}}
            </label>
			
			
			<label>
               Email <?php echo $errors->first('email'); ?>
               {{Form::email('email',null, ['placeholder'=>'rieqysn13@gmail.com'])}}
            </label>
			
			<label>
               Password <?php echo $errors->first('password'); ?>
               {{Form::password('password')}}
            </label>
			<label>
               Ketik ulang password <span class="error"><?php echo $errors->first('password') ?></span>
               {{Form::password('password_confirmation')}}
            </label>
      
 
            <input type="submit" class="btn" value="Submit">

       {{ Form::close() }}


    </div>
</body>
</html>