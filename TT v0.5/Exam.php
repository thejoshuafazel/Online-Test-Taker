<!DOCTYPE html>
<?php
    if(!isset($_COOKIE['emails'])) {
        header ('Location: ./Slogin.html');
        exit();
    }
    if(isset($_COOKIE['exam'])){
        setcookie('exam','1',time()-3600);
        header ('Location: ./Slogin.html');
        exit();
    }
    if(!isset($_COOKIE['exam'])) {
        setcookie('exam','1',time()+3*60*60*1000);
    }
?>
<html>
    <head>
        <title>
            Exam
        </title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">   </script>
        <script type="text/javascript">
            var ans = new Array("U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U","U");
            
            $(function() {
                $('#q1').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[0];
                    document.getElementById("qqn").innerHTML="Q.1 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[0]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[0];
                    });
                });

                $('#q2').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[1];
                    document.getElementById("qqn").innerHTML="Q.2 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[1]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[1];
                    });
                });
                
                $('#q3').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[2];
                    document.getElementById("qqn").innerHTML="Q.3 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[2]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[2];
                    });
                });
                
                $('#q4').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[3];
                    document.getElementById("qqn").innerHTML="Q.4 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[3]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[3];
                    });
                });
                
                $('#q5').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[4];
                    document.getElementById("qqn").innerHTML="Q.5 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[4]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[4];
                    });
                });
                
                $('#q6').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[5];
                    document.getElementById("qqn").innerHTML="Q.6 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[5]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[5];
                    });
                });
                
                $('#q7').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[6];
                    document.getElementById("qqn").innerHTML="Q.7 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[6]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[6];
                    });
                });
                
                $('#q8').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[7];
                    document.getElementById("qqn").innerHTML="Q.8 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[7]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[7];
                    });
                });
                
                $('#q9').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[8];
                    document.getElementById("qqn").innerHTML="Q.9 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[8]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[8];
                    });
                });
                
                $('#q10').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[9];
                    document.getElementById("qqn").innerHTML="Q.10 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[9]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[9];
                    });
                });
                
                $('#q11').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[10];
                    document.getElementById("qqn").innerHTML="Q.11 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[10]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[10];
                    });
                });
                
                $('#q12').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[11];
                    document.getElementById("qqn").innerHTML="Q.12 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[11]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[11];
                    });
                });
                
                $('#q13').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[12];
                    document.getElementById("qqn").innerHTML="Q.13 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[12]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[12];
                    });
                });
                
                $('#q14').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[13];
                    document.getElementById("qqn").innerHTML="Q.14 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[13]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[13];
                    });13
                });
                
                $('#q15').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[14];
                    document.getElementById("qqn").innerHTML="Q.15 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[14]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[14];
                    });
                });
                
                $('#q16').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[15];
                    document.getElementById("qqn").innerHTML="Q.16 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[15]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[15];
                    });
                });
                
                $('#q17').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[16];
                    document.getElementById("qqn").innerHTML="Q.17 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[16]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[16];
                    });
                });
                
                $('#q18').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[17];
                    document.getElementById("qqn").innerHTML="Q.18 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[17]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[17];
                    });
                });
                
                $('#q19').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[18];
                    document.getElementById("qqn").innerHTML="Q.19 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[18]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[18];
                    });
                });
                
                $('#q20').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[19];
                    document.getElementById("qqn").innerHTML="Q.20 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[19]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[19];
                    });
                });
                
                $('#q21').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[20];
                    document.getElementById("qqn").innerHTML="Q.21 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[20]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[20];
                    });
                });
                
                $('#q22').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[21];
                    document.getElementById("qqn").innerHTML="Q.22 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[21]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[21];
                    });
                });
                
                $('#q23').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[22];
                    document.getElementById("qqn").innerHTML="Q.23 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[22]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[22];
                    });
                });
                
                $('#q24').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[23];
                    document.getElementById("qqn").innerHTML="Q.24 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[23]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[23];
                    });
                });
                
                $('#q25').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[24];
                    document.getElementById("qqn").innerHTML="Q.25 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[24]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[24];
                    });
                });
                
                $('#q26').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[25];
                    document.getElementById("qqn").innerHTML="Q.26 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[25]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[25];
                    });
                });
                
                $('#q27').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[26];
                    document.getElementById("qqn").innerHTML="Q.27 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[26]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[26];
                    });
                });
                
                $('#q28').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[27];
                    document.getElementById("qqn").innerHTML="Q.28 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[27]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[27];
                    });
                });
                
                $('#q29').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[28];
                    document.getElementById("qqn").innerHTML="Q.29 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[28]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[28];
                    });
                });
                
                $('#q30').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[29];
                    document.getElementById("qqn").innerHTML="Q.30 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[29]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[29];
                    });
                });
                
                $('#q31').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[30];
                    document.getElementById("qqn").innerHTML="Q.31 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[30]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[30];
                    });
                });
                
                $('#q32').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[31];
                    document.getElementById("qqn").innerHTML="Q.32 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[31]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[31];
                    });
                });
                
                $('#q33').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[32];
                    document.getElementById("qqn").innerHTML="Q.33 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[32]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[32];
                    });
                });
                
                $('#q34').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[33];
                    document.getElementById("qqn").innerHTML="Q.34 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[33]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[33];
                    });
                });
                
                $('#q35').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[34];
                    document.getElementById("qqn").innerHTML="Q.35 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[34]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[34];
                    });
                });
                
                $('#q36').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[35];
                    document.getElementById("qqn").innerHTML="Q.36 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[35]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[35];
                    });
                });
                
                $('#q37').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[36];
                    document.getElementById("qqn").innerHTML="Q.37 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[36]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[36];
                    });
                });
                
                $('#q38').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[37];
                    document.getElementById("qqn").innerHTML="Q.38 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[37]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[37];
                    });
                });
                
                $('#q39').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[38];
                    document.getElementById("qqn").innerHTML="Q.39 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[38]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[38];
                    });
                });
                
                $('#q40').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[39];
                    document.getElementById("qqn").innerHTML="Q.40 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[39]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[39];
                    });
                });
                
                $('#q41').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[40];
                    document.getElementById("qqn").innerHTML="Q.41 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[40]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[40];
                    });
                });
                
                $('#q42').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[41];
                    document.getElementById("qqn").innerHTML="Q.42 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[41]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[41];
                    });
                });
                
                $('#q43').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[42];
                    document.getElementById("qqn").innerHTML="Q.43 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[42]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[42];
                    });
                });
                
                $('#q44').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[43];
                    document.getElementById("qqn").innerHTML="Q.44 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[43]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[43];
                    });
                });
                
                $('#q45').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[44];
                    document.getElementById("qqn").innerHTML="Q.45 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[44]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[44];
                    });
                });
                
                $('#q46').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[45];
                    document.getElementById("qqn").innerHTML="Q.46 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[45]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[45];
                    });
                });
                
                $('#q47').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[46];
                    document.getElementById("qqn").innerHTML="Q.47 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[46]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[46];
                    });
                });
                
                $('#q48').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[47];
                    document.getElementById("qqn").innerHTML="Q.48 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[47]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[47];
                    });
                });
                
                $('#q49').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[48];
                    document.getElementById("qqn").innerHTML="Q.49 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[48]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[48];
                    });
                });
                
                $('#q50').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[49];
                    document.getElementById("qqn").innerHTML="Q.50 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[49]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[49];
                    });
                });
                
                $('#q51').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[50];
                    document.getElementById("qqn").innerHTML="Q.51 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[50]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[50];
                    });
                });
                
                $('#q52').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[51];
                    document.getElementById("qqn").innerHTML="Q.52 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[51]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[51];
                    });
                });
                
                $('#q53').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[52];
                    document.getElementById("qqn").innerHTML="Q.53 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[52]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[52];
                    });
                });
                
                $('#q54').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[53];
                    document.getElementById("qqn").innerHTML="Q.54 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[53]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[53];
                    });
                });
                
                $('#q55').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[54];
                    document.getElementById("qqn").innerHTML="Q.55 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[54]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[54];
                    });
                });
                
                $('#q56').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[55];
                    document.getElementById("qqn").innerHTML="Q.56 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[55]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[55];
                    });
                });
                
                $('#q57').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[56];
                    document.getElementById("qqn").innerHTML="Q.57 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[56]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[56];
                    });
                });
                
                $('#q58').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[57];
                    document.getElementById("qqn").innerHTML="Q.58 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[57]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[57];
                    });
                });
                
                $('#q59').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[58];
                    document.getElementById("qqn").innerHTML="Q.59 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[58]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[58];
                    });
                });
                
                $('#q60').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[59];
                    document.getElementById("qqn").innerHTML="Q.60 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[59]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[59];
                    });
                });
                
                $('#q61').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[60];
                    document.getElementById("qqn").innerHTML="Q.61 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[60]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[60];
                    });
                });
                
                $('#q62').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[61];
                    document.getElementById("qqn").innerHTML="Q.62 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[61]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[61];
                    });
                });
                
                $('#q63').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[62];
                    document.getElementById("qqn").innerHTML="Q.63 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[62]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[62];
                    });
                });
                
                $('#q64').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[63];
                    document.getElementById("qqn").innerHTML="Q.64 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[63]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[63];
                    });
                });
                
                $('#q65').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[64];
                    document.getElementById("qqn").innerHTML="Q.65 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[64]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[64];
                    });
                });
                
                $('#q66').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[65];
                    document.getElementById("qqn").innerHTML="Q.66 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[65]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[65];
                    });
                });
                
                $('#q67').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[66];
                    document.getElementById("qqn").innerHTML="Q.67 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[66]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[66];
                    });
                });
                
                $('#q68').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[67];
                    document.getElementById("qqn").innerHTML="Q.68 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[67]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[67];
                    });
                });
                
                $('#q69').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[68];
                    document.getElementById("qqn").innerHTML="Q.69 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[68]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[68];
                    });
                });
                
                $('#q70').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[69];
                    document.getElementById("qqn").innerHTML="Q.70 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[69]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[69];
                    });
                });
                
                $('#q71').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[70];
                    document.getElementById("qqn").innerHTML="Q.71 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[70]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[70];
                    });
                });
                
                $('#q72').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[71];
                    document.getElementById("qqn").innerHTML="Q.72 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[71]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[71];
                    });
                });
                
                $('#q73').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[72];
                    document.getElementById("qqn").innerHTML="Q.73 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[72]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[72];
                    });
                });
                
                $('#q74').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[73];
                    document.getElementById("qqn").innerHTML="Q.74 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[73]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[73];
                    });
                });
                
                $('#q75').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[74];
                    document.getElementById("qqn").innerHTML="Q.75 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[74]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[74];
                    });
                });
                
                $('#q76').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[75];
                    document.getElementById("qqn").innerHTML="Q.76 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[75]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[75];
                    });
                });
                
                $('#q77').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[76];
                    document.getElementById("qqn").innerHTML="Q.77 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[76]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[76];
                    });
                });
                
                $('#q78').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[77];
                    document.getElementById("qqn").innerHTML="Q.78 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[77]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[77];
                    });
                });
                
                $('#q79').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[78];
                    document.getElementById("qqn").innerHTML="Q.79 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[78]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[78];
                    });
                });
                
                $('#q80').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[79];
                    document.getElementById("qqn").innerHTML="Q.80 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[79]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[79];
                    });
                });
                
                $('#q81').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[80];
                    document.getElementById("qqn").innerHTML="Q.81 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[80]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[80];
                    });
                });
                
                $('#q82').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[81];
                    document.getElementById("qqn").innerHTML="Q.82 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[81]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[81];
                    });
                });
                
                $('#q83').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[82];
                    document.getElementById("qqn").innerHTML="Q.83 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[82]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[82];
                    });
                });
                
                $('#q84').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[83];
                    document.getElementById("qqn").innerHTML="Q.84 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[83]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[83];
                    });
                });
                
                $('#q85').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[84];
                    document.getElementById("qqn").innerHTML="Q.85 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[84]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[84];
                    });
                });
                
                $('#q86').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[85];
                    document.getElementById("qqn").innerHTML="Q.86 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[85]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[85];
                    });
                });
                
                $('#q87').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[86];
                    document.getElementById("qqn").innerHTML="Q.87 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[86]=var_name;86
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[86];
                    });
                });
                
                $('#q88').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[87];
                    document.getElementById("qqn").innerHTML="Q.88 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[87]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[87];
                    });
                });
                
                $('#q89').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[88];
                    document.getElementById("qqn").innerHTML="Q.89 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[88]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[88];
                    });
                });
                
                $('#q90').click(function (event) {
                    document.getElementById("ans").innerHTML="Saved Answer: "+ans[89];
                    document.getElementById("qqn").innerHTML="Q.90 ";
                    $('#buttoncheck').click(function () {
                        var var_name = $("input[type='radio']:checked").val();
                        ans[89]=var_name;
                        document.getElementById("ans").innerHTML="Saved Answer: "+ans[89];
                    });
                });
                
            });
            
    //   Q  U  E  S  T  I  O  N
        function serve(ques){
            document.getElementById("instructions").style.display="none";
            document.getElementById("content").style.display="inherit";
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function () {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("d1").innerHTML=this.responseText;
                }
           };
           xhttp.open("GET","questions.php?q="+ ques,true);
           xhttp.send();
           radioA(ques);
       }
    //   R  A  D  I  O      A     
        function radioA(ques){
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function () {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("r1").innerHTML='<input name="option" type="radio" id="rad1" value="A">&nbsp;'+this.responseText;  
                }
            };
            xhttp.open("GET","RadioA.php?q="+ ques,true);
            xhttp.send();
            radioB(ques);
        }
            
    //   R  A  D  I  O      B            
        function radioB(ques){
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function () {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("r2").innerHTML='<input name="option" type="radio" id="rad2" value="B">&nbsp;'+this.responseText;
                }
            };
            xhttp.open("GET","RadioB.php?q="+ ques,true);
            xhttp.send();
            radioC(ques);
        }
            
    //   R  A  D  I  O      C
        function radioC(ques){
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function () {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("r3").innerHTML='<input name="option" type="radio" id="rad3" value="C">&nbsp;'+this.responseText;
                }
            };
            xhttp.open("GET","RadioC.php?q="+ ques,true);
            xhttp.send();
            radioD(ques);
        }
            
    //   R  A  D  I  O     D
        function radioD(ques){
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function () {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("r4").innerHTML='<input name="option" type="radio" id="rad4" value="D">&nbsp;'+this.responseText;  
                }
            };  
            xhttp.open("GET","RadioD.php?q="+ ques,true);
            xhttp.send();
        }
        
        function result(){
            window.location.href = "SFinal.php?ans="+ans+"&qno=<?php echo $num=$_GET['qno'];?>";
        }
            
        </script>
        
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            #Wrapper{
                float: left;
                width: 350px;
                position: absolute;
            }
            #btn-area{
                padding: 30px;
                background-color: #f1f1f1;
                border-radius: 4px;
                margin: 10px;
                height: 100%;
                -webkit-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                -moz-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
            }
            button{
                width: 40px;
                height: 40px;
                margin: 3px;
                background-color: #4CAF50;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                outline: none;
                border: 2px solid rgba(0, 0, 0, 0.2);
            }
            #sub {
                padding: 30px;
                background-color: #f1f1f1;
                border-radius: 4px;
                margin: 10px;
                height: 40px;
                -webkit-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                -moz-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                position: absolute;
                top: 80%;
                right: 0;
                float: right;   
                font-family: sans-serif;
                color: #fff;
                display: block;
                font-weight: 100;
                text-align: center;
                font-size: 30px;
                margin: 20px;
            }
            #subb {
                width: 80px;
            }
            #buttoncheck {
                width: 80px;
                height: 40px;
                margin: 5px;
                background-color: #4CAF50;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                outline: none;
                border: 2px solid rgba(0, 0, 0, 0.2);
            }
            button:hover,#buttoncheck:hover{
                opacity: 0.8;
            }
            
            #content{
                margin-left: 550px;
                margin-top: 300px;
                position: absolute;
                width: 800px;
                height: auto;
                padding: 20px;
                border: 1px solid black;
            }
            #instructions{
                font-size: 23px;
                width: 800px;
                margin-left: 550px;
                margin-top: 60px;
                position: absolute;
                
            }
             #Head-1{
                font-size:28px; 
            }
            #d1,#qqn{
                font-size: 28px;
                display: inline-block;
            }
            #r1,#r2,#r3,#r4{
                font-size: 20px;
                display: inline-block;
            }
            #ans1,#ans2,#ans3,#ans4{
                margin: 5px;
            }
            #instructions{
                padding: 50px;
                background-color: #f1f1f1;
                border-radius: 4px;
                -webkit-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                -moz-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
            }
           /*FOR CLOCK*/
            
            h1{
              color: #396;
              font-weight: 100;
              font-size: 40px;
              margin: 40px 0px 20px;
            }

            #clockdiv{
                padding: 30px;
                background-color: #f1f1f1;
                border-radius: 4px;
                margin: 10px;
                height: 100%;
                -webkit-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                -moz-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                
                float: right;   
                font-family: sans-serif;
                color: #fff;
                display: inline-block;
                font-weight: 100;
                text-align: center;
                font-size: 30px;
                margin: 20px;
            }

            #clockdiv > div{
                padding: 10px;
                border-radius: 3px;
                background: #4CAF50;
                display: inline-block;
            }

            #clockdiv div > span{
                padding: 15px;
                border-radius: 3px;
                background: #4CAF50;
                border: 2px solid rgba(0, 0, 0, 0.25);
                display: inline-block;
            }

            .smalltext{
                padding-top: 5px;
                font-size: 16px;
            }
            
        </style>
    </head>
    
    <body>
    
        <div id="Wrapper">
            
            <div id="btn-area">
                
                <p id="physics">
                    
                    <h3>PHYSICS</h3>
                    <button id="q1" value="1" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+1)">1</button>
                    <button id="q2" value="2" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+2)">2</button>
                    <button id="q3" value="3" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+3)">3</button>
                    <button id="q4" value="4" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+4)">4</button>
                    <button id="q5" value="5" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+5)">5</button>
                    <button id="q6" value="6" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+6)">6</button>
                    <button id="q7" value="7" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+7)">7</button>
                    <button id="q8" value="8" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+8)">8</button>
                    <button id="q9" value="9" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+9)">9</button>
                    <button id="q10" value="10" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+10)">10</button>
                    <button id="q11" value="11" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+11)">11</button>
                    <button id="q12" value="12" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+12)">12</button>
                    <button id="q13" value="13" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+13)">13</button>
                    <button id="q14" value="14" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+14)">14</button>
                    <button id="q15" value="15" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+15)">15</button>
                    <button id="q16" value="16" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+16)">16</button>
                    <button id="q17" value="17" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+17)">17</button>
                    <button id="q18" value="18" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+18)">18</button>
                    <button id="q19" value="19" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+19)">19</button>
                    <button id="q20" value="20" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+20)">20</button>
                    <button id="q21" value="21" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+21)">21</button>
                    <button id="q22" value="22" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+22)">22</button>
                    <button id="q23" value="23" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+23)">23</button>
                    <button id="q24" value="24" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+24)">24</button>
                    <button id="q25" value="25" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+25)">25</button>
                    <button id="q26" value="26" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+26)">26</button>
                    <button id="q27" value="27" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+27)">27</button>
                    <button id="q28" value="28" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+28)">28</button>
                    <button id="q29" value="29" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+29)">29</button>
                    <button id="q30" value="30" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+30)">30</button>
                </p>

                <p id="chemistry">
                    <h3>CHEMISTRY</h3>
                    <button id="q31" value="31" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+31)">31</button>
                    <button id="q32" value="32" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+32)">32</button>
                    <button id="q33" value="33" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+33)">33</button>
                    <button id="q34" value="34" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+34)">34</button>
                    <button id="q35" value="35" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+35)">35</button>
                    <button id="q36" value="36" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+36)">36</button>
                    <button id="q37" value="37" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+37)">37</button>
                    <button id="q38" value="38" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+38)">38</button>
                    <button id="q39" value="39" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+39)">39</button>
                    <button id="q40" value="40" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+40)">40</button>
                    <button id="q41" value="41" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+41)">41</button>
                    <button id="q42" value="42" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+42)">42</button>
                    <button id="q43" value="43" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+43)">43</button>
                    <button id="q44" value="44" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+44)">44</button>
                    <button id="q45" value="45" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+45)">45</button>
                    <button id="q46" value="46" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+46)">46</button>
                    <button id="q47" value="47" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+47)">47</button>
                    <button id="q48" value="48" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+48)">48</button>
                    <button id="q49" value="49" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+49)">49</button>
                    <button id="q50" value="50" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+50)">50</button>
                    <button id="q51" value="51" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+51)">51</button>
                    <button id="q52" value="52" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+52)">52</button>
                    <button id="q53" value="53" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+53)">53</button>
                    <button id="q54" value="54" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+54)">54</button>
                    <button id="q55" value="55" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+55)">55</button>
                    <button id="q56" value="56" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+56)">56</button>
                    <button id="q57" value="57" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+57)">57</button>
                    <button id="q58" value="58" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+58)">58</button>
                    <button id="q59" value="59" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+59)">59</button>
                    <button id="q60" value="60" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+60)">60</button>
                </p>

                <p id="mathematics">
                    <h3>MATHEMATICS</h3>
                    <button id="q61" value="61" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+61)">61</button>
                    <button id="q62" value="62" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+62)">62</button>
                    <button id="q63" value="63" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+63)">63</button>
                    <button id="q64" value="64" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+64)">64</button>
                    <button id="q65" value="65" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+65)">65</button>
                    <button id="q66" value="66" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+66)">66</button>
                    <button id="q67" value="67" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+67)">67</button>
                    <button id="q68" value="68" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+68)">68</button>
                    <button id="q69" value="69" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+69)">69</button>
                    <button id="q70" value="70" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+70)">70</button>
                    <button id="q71" value="71" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+71)">71</button>
                    <button id="q72" value="72" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+72)">72</button>
                    <button id="q73" value="73" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+73)">73</button>
                    <button id="q74" value="74" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+74)">74</button>
                    <button id="q75" value="75" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+75)">75</button>
                    <button id="q76" value="76" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+76)">76</button>
                    <button id="q77" value="77" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+77)">77</button>
                    <button id="q78" value="78" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+78)">78</button>
                    <button id="q79" value="79" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+79)">79</button>
                    <button id="q80" value="80" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+80)">80</button>
                    <button id="q81" value="81" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+81)">81</button>
                    <button id="q82" value="82" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+82)">82</button>
                    <button id="q83" value="83" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+83)">83</button>
                    <button id="q84" value="84" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+84)">84</button>
                    <button id="q85" value="85" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+85)">85</button>
                    <button id="q86" value="86" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+86)">86</button>
                    <button id="q87" value="87" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+87)">87</button>
                    <button id="q88" value="88" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+88)">88</button>
                    <button id="q89" value="89" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+89)">89</button>
                    <button id="q90" value="90" onclick="serve(<?php echo $num=$_GET['qno'];?>*90+90)">90</button>
                </p>
            </div>
        </div>
        
        <div id="instructions">
            <p id="Head-1">INSTRUCTIONS :</p>
            <div>
                <ul>
                    <li id="Head-2">For candidates who are appearing for the computer based test, here's a list of instructions:</li>

                    <li>A sample/mock test is available on JEE (Main) website for practice purpose  and  to give the candidate look  and feel of  the Computer Based Examination (CBE), the candidates can solve it.</li>
   
                    <li>The test will start exactly at the time mentioned in the admit card and an announcement to this effect will be made by the invigilator.</li> 
   
                    <li>The test will be held for a duration of three hours.</li> 
  
                    <li>The test paper will be consisting questions of Physics, Chemistry and Mathematics and all questions will have equal weightage.</li> 
    
                    <li>Each question will be allotted four marks for the correct response. One fourth mark i.e. one mark will be deducted for indicating incorrect response of each question. No deduction from the total score will be made, if no response is indicated for a question.</li>
   
                    <li>There is only one correct response for each question out of four responses given.</li>
   
                    <li>All calculations/writing work are to be done only in the rough sheet provided at the centre and on completion of the test candidates must hand over the rough sheets to the invigilator on duty in the room/hall.</li> 
   
                    <li>During the examination time, the invigilator will check admit card of the candidate to satisfy himself/herself about the identity of each candidate.</li> 
   
                    <li>The candidates are governed by all Rules and Regulations of the Board with regard to their conduct  in the Examination Hall. All cases of unfair means will be dealt with as per rules.</li> 
    
                    <li>The candidates must sign on the attendance sheet at the appropriate place.</li>
                    
                    <li>The following code is followed for saved answers: U-Unanswered, A-Option A, B-Option B, C-Option C, D-Option D.</li>
                    
                    <li>Please press the submit button after selecting any answer. Not doing so will result in the answer to be marked as unanswered.</li>
                    
                    <li>Please Do Not refresh the page.</li>
                </ul>
            </div>
        </div>

        <div id="content" style="display: none">
            <div id="qqn"></div><div id="d1"></div>
            <div id="ans1">
                <div id="r1"></div>
            </div>
            <div id="ans2">
                <div id="r2"></div>
            </div>
            <div id="ans3">
                <div id="r3"></div>
            </div>
            <div id="ans4">
                <div id="r4"></div>
            </div>
            <button id="buttoncheck">Submit</button>
            <div id="ans"></div>
        </div>

        <div id="clockdiv">
            <div>
                <span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div>
            <div>
                <span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div>
                <span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>
            
        </div>
        <center>
            <div id="sub">
                <div>
                    <button id="subb" onclick="result()">Finish</button>
                </div>
            </div>
        </center>

        <script>
    //   C  L  O  C  K
            function getTimeRemaining(endtime) {
              var t = Date.parse(endtime) - Date.parse(new Date());
              var seconds = Math.floor((t / 1000) % 60);
              var minutes = Math.floor((t / 1000 / 60) % 60);
              var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
              return {
                'total': t,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
              };
            }

            function initializeClock(id, endtime)
            {
                
              var clock = document.getElementById(id);
              var hoursSpan = clock.querySelector('.hours');
              var minutesSpan = clock.querySelector('.minutes');
              var secondsSpan = clock.querySelector('.seconds');

                function updateClock() 
                {
                    var t = getTimeRemaining(endtime);
                    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                    if (t.total <= 0)
                    {
                        clearInterval(timeinterval);
                        window.location.href = "SFinal.php?ans="+ans+"&qno=<?php echo $num=$_GET['qno'];?>";
                    }
              }
                
              updateClock();
              var timeinterval = setInterval(updateClock, 1000);
            }

            var deadline = new Date(Date.parse(new Date()) + 3 * 60 * 60 *1000);
            initializeClock('clockdiv', deadline);
            
        </script>
    </body>
</html>