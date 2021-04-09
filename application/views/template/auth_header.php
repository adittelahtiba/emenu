<?php
if ($this->session->userdata('cafe')) {
    $this->session->set_flashdata('message', '<div class="alert alert-warning  alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Anda sudah login!</div>');
    redirect('Login/directpage');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/statis/metrica/images/favicon.ico">

    <!-- App css -->
    <link href="<?= base_url(); ?>assets/statis/metrica/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/statis/metrica/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/statis/metrica/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/statis/metrica/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">