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
            <h3>Form Input Biodata</h3>
            <label>
                Nama <?php echo $errors->first('nama'); ?>
               {{Form::text('nama')}}
            </label>
			<label>
                Jenis Kelamin  <?php echo $errors->first('jenis_kelamin'); ?>
               {{Form::radio('jenis_kelamin','L', true)}} Laki-laki 
               {{Form::radio('jenis_kelamin','P')}} Perempuan
            </label>
			 <label>
                Nama Ayah <?php echo $errors->first('nama_ayah'); ?>
               {{Form::text('nama_ayah')}}
            </label>
			 <label>
                Nama Ibu <?php echo $errors->first('nama_ibu'); ?>
               {{Form::text('nama_ibu')}}
            </label>
			 <label>
                Agama <?php echo $errors->first('agama'); ?>
               {{Form::text('agama',null, ['placeholder'=>'Islam'])}}
            </label>
			 <label>
                Tempat Lahir <?php echo $errors->first('tempat_lahir'); ?>
               {{Form::text('tempat_lahir',null,['placeholder'=>'Semarang'])}}
            </label>
			 <label>
                Tgl Lahir <?php echo $errors->first('tgl_lahir'); ?>
               {{Form::text('tgl_lahir',null, ['placeholder'=>'YYYY-MM-DD'])}}
            </label>
			 <label>
               Alamat <?php echo $errors->first('alamat'); ?>
               {{Form::text('alamat',null, ['placeholder'=>'Jalan Bla Bla'])}}
            </label>
			<label>
               Email <?php echo $errors->first('email'); ?>
               {{Form::email('email',null, ['placeholder'=>'rieqysn13@gmail.com'])}}
            </label>
			<label>
               Nomor kontak <?php echo $errors->first('nomor_kontak'); ?>
               {{Form::text('nomor_kontak',null)}}
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