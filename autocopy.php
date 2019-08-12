<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery autofill plug-in demo</title>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery.autofill.min.js"></script>

    <script type="text/javascript">
        $().ready(function() {
            $("#fname_tbox").autofill({
                fieldId : "firstname_tbox",
                overrideFieldEverytime : false
            });

            $("#lname_tbox").autofill({
                fieldId : "lastname_tbox",
                overrideFieldEverytime : false
            });

            $("#cemail_tbox").autofill({
                fieldId : "uemail_tbox",
                overrideFieldEverytime : true
            });

            $("#fname_tarea").autofill({
                fieldId : "firstname_tarea",
                overrideFieldEverytime : false
            });

            $("#lname_tarea").autofill({
                fieldId : "lastname_tarea",
                overrideFieldEverytime : false
            });

            $("#cemail_tarea").autofill({
                fieldId : "uemail_tarea",
                overrideFieldEverytime : true
            });

        });
    </script>
    <style type="text/css">
        table
        {
            border : 3px solid red;
            font-weight : bold;
            border-radius : 8px;
            background : #C8FE04;
            margin:0px auto;
        }

        fieldset {
            margin:0px auto;
            width : 80%;
            position : relative;
            border-radius : 8px;
            border : 3px solid blue;
            background : #FBFC90;
        }

        legend {
            border : 2px solid magenta;
            border-radius : 5px;
            font-weight : bold;
            background : cyan;
        }

        td {
            width : 565px;
            text-align : center;
            position:relative;

        }

        h1 {
            margin:0px auto;
            width : 60%;
            position:relative;
        }

        body{margin:0px; padding:0px;}

        footer {
            margin-top:60px;
            margin-left:80px;
            position:relative;
        }

        #main {margin:0px auto; padding:0px; width : 900px; position:relative;}
    </style>

</head>
<body>

<div id="main">
    <h1 id="banner"><a href="https://www.npmjs.com/package/autofill" title="jQuery Autofill Plugin">jQuery Autofill Plugin</a> Demo</h1>
    <br/><br/>
    <table><tr><td>Text Box</td></tr></table>
    <br/>
    <fieldset>
        <legend>Contact Details</legend>
        <p>
            <label for="fname_tbox">Firstname</label>
            <input id="fname_tbox" name="fname_tbox" type="text" placeholder="Enter Firstname"/>
        </p>
        <p>
            <label for="lname_tbox">Lastname</label>
            <input id="lname_tbox" name="lname_tbox" type="text" placeholder="Enter Lastname"/>
        </p>
        <p>
            <label for="cemail_tbox">E-Mail</label>
            <input id="cemail_tbox" type="text" name="cemail_tbox" placeholder="Enter E-Mail"/>
        </p>
    </fieldset>
    <br/>
    <fieldset>
        <legend>User Details</legend>
        <p>
            <label for="firstname_tbox">Firstname</label>
            <input id="firstname_tbox" name="firstname_tbox" type="text" />
            <label>Filled first time.</label>
        </p>
        <p>
            <label for="lastname_tbox">Lastname</label>
            <input id="lastname_tbox" name="lastname_tbox" type="text" />
            <label>Filled first time.</label>
        </p>
        <p>
            <label for="uemail_tbox">E-Mail</label>
            <input id="uemail_tbox" type="text" name="uemail_tbox"/>
            <label>Filled every time.</label>
        </p>
    </fieldset><br/>
    <hr>
    <br/>
    <table><tr><td>Text Area</td></tr></table>
    <br/>
    <fieldset>
        <legend>Contact Details</legend>
        <p>
            <label for="fname_tarea">Firstname</label>
            <textarea rows="2" cols="50" id="fname_tarea" name="fname_tarea" placeholder="Enter Firstname"></textarea>
        </p>
        <p>
            <label for="lname_tarea">Lastname</label>
            <textarea rows="2" cols="50" id="lname_tarea" name="lname_tarea" placeholder="Enter Lastname"></textarea>
        </p>
        <p>
            <label for="cemail_tarea">E-Mail</label>
            <textarea rows="2" cols="50" id="cemail_tarea" name="cemail_tarea" placeholder="Enter E-Mail"></textarea>
        </p>
    </fieldset>
    <br/>
    <fieldset>
        <legend>User Details</legend>
        <p>
            <label for="firstname_tarea">Firstname</label>
            <textarea rows="2" cols="50" id="firstname_tarea" name="firstname_tarea"></textarea>
            <label>Filled first time.</label>
        </p>
        <p>
            <label for="lastname_tarea">Lastname</label>
            <textarea rows="2" cols="50" id="lastname_tarea" name="lastname_tarea"></textarea>
            <label>Filled first time.</label>
        </p>
        <p>
            <label for="uemail_tarea">E-Mail</label>
            <textarea rows="2" cols="50" id="uemail_tarea" name="uemail_tarea"></textarea>
            <label>Filled every time.</label>
        </p>
    </fieldset>
    <footer>
        <p>Licensed under the <a href="http://opensource.org/licenses/MIT" title="MIT">MIT</a> and <a href="http://www.gnu.org/licenses/gpl.html" title="GPL v3">GPL v3</a> Project page <a href="https://github.com/harshen/jquery-autofill" title="Link">Link</a>
            Author: <a href="https://github.com/harshen" title="Harshen Pandey">Harshen Pandey</a> (harshenpandey@gmail.com)</p>
    </footer>
</div>
</body>
</html>
