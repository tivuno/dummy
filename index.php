<?php

?>
<html lang="el">
<head>
    <link href='main.css' rel='stylesheet'>
    <title></title>
</head>
<body>
<div class='container p-4'>
    <div class='loader_container'>
        <div class='loader'>
            <span class='spinner'></span>
            <div class='title'>Random message...</div>
        </div>
    </div>
    <form class='col-lg-6 offset-lg-3 '>
        <div class='row justify-content-center'>
            <input type='text' placeholder='Example input'>
            <button class='btn btn-success col-4 mt-4'>Download</button>
        </div>
    </form>
    <form>
        <div class='row mb-3'>
            <label for='inputEmail3' class='col-sm-2 col-form-label'>Email</label>
            <div class='col-sm-10'>
                <input type='email' class='form-control' id='inputEmail3'>
            </div>
        </div>
        <div class='row mb-3'>
            <label for='inputPassword3' class='col-sm-2 col-form-label'>Password</label>
            <div class='col-sm-10'>
                <input type='password' class='form-control' id='inputPassword3'>
            </div>
        </div>
        <fieldset class='row mb-3'>
            <legend class='col-form-label col-sm-2 pt-0'>Radios</legend>
            <div class='col-sm-10'>
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios1' value='option1'
                           checked>
                    <label class='form-check-label' for='gridRadios1'>
                        First radio
                    </label>
                </div>
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios2' value='option2'>
                    <label class='form-check-label' for='gridRadios2'>
                        Second radio
                    </label>
                </div>
                <div class='form-check disabled'>
                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios3' value='option3'
                           disabled>
                    <label class='form-check-label' for='gridRadios3'>
                        Third disabled radio
                    </label>
                </div>
            </div>
        </fieldset>
        <div class='row mb-3'>
            <div class='col-sm-10 offset-sm-2'>
                <div class='form-check'>
                    <input class='form-check-input' type='checkbox' id='gridCheck1'>
                    <label class='form-check-label' for='gridCheck1'>
                        Example checkbox
                    </label>
                </div>
            </div>
        </div>
        <button type='submit' class='btn btn-primary'>Sign in</button>
    </form>
</div>
<script type='text/javascript' src='jquery.min.js'></script>
<script type='text/javascript' src='main.js'></script>
</body>
</html>
