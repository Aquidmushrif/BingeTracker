<?php
$var1 = array( '' );
$var = "<html>

<head>
    <meta charset='UTF-8'>
    <title>Feedback</title>
</head>

<body style='background: url(images/background.jpg)'>
    <center>
        <h1>FEEDBACK SUBMISION</h1>
        <br />
        <br />
        <form action='http://localhost/Binge/Feedback.php' method = 'POST'>
        <table width='600' border='0' cellpadding='5' style='background: url(images/tablebg.jpg)'>
            <tbody>
                <tr>
                    <td><strong>Name</strong></td>
                    <td><input type='text' name='name'></td>
                </tr>
                <tr>
                    <td><strong>Birthdate</strong></td>
                    <td><input type='date' name='dob'></td>
                </tr>
                <tr>
                    <td><strong>Suggestions</strong></td>
                    <td><textarea>Write your suggestions here</textarea></td>
                </tr>
                <tr>
                    <td><strong>Found Helpful?</strong></td>
                    <td>
                        <label><input type='radio' name='RadioGroup1' value='Not Helpful' id='RadioGroup1_0'>Not Helpful</label>
                        <label><input type='radio' name='RadioGroup1' value='Helpful' id='RadioGroup1_1'>Helpful</label>
                        <label><input type='radio' name='RadioGroup1' value='Very Helpful' id='RadioGroup1_2'>Very Helpful</label>
                    </td>
                </tr>
                <tr>
                    <td><strong>Which genres do you like?</strong></td>
                    <td>
                        <label><input type='checkbox' name='CheckboxGroup1[]' value='Horror' id='CheckboxGroup1_0'>Horror</label>
                        <label><input type='checkbox' name='CheckboxGroup1[]' value='Mystery' id='CheckboxGroup1_1'>Mystery</label>
                        <label><input type='checkbox' name='CheckboxGroup1[]' value='Comedy' id='CheckboxGroup1_2'>Comedy</label>
                    </td>
            </tbody>
        </table>
        <a href='response.html'><input type='submit'></a>
        </form>
    </center>

</body>
</html>";

echo $var;
if ( isset( $_POST['name'] ) and isset( $_POST['dob'] ) and isset( $_POST['RadioGroup1'] ) and !empty( $_POST['CheckboxGroup1'] ) ) {
    $count = 0;
    $var2 = $_POST['name'];
    $var3 = $_POST['dob'];
    $var4 = $_POST['RadioGroup1'];

    foreach ( $_POST['CheckboxGroup1'] as $selected ) {
        $var1[$count] = $selected;
        $count++;
    }

} else {
    $var1 = array( '' );
    $var2 = 'no data';
    $var3 = 'no data';
    $var4 = 'no data';
}
echo $var2.'<br/>';
echo $var3.'<br/>';
echo $var4.'<br/>';
foreach ( $var1 as $index ) {
    echo $index.', ';
}

?>
