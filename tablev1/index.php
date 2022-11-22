<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/tb/Table_Fixed_Header/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Nov 2022 11:47:45 GMT -->

<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<meta name="robots" content="noindex, follow">
	<script
		nonce="6c7b9ba7-4c5a-465c-86a5-1a1eba2333a1">(function (w, d) { !function (e, f, g, h) { e.zarazData = e.zarazData || {}; e.zarazData.executed = []; e.zaraz = { deferred: [], listeners: [] }; e.zaraz.q = []; e.zaraz._f = function (i) { return function () { var j = Array.prototype.slice.call(arguments); e.zaraz.q.push({ m: i, a: j }) } }; for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k); e.zaraz.init = () => { var l = f.getElementsByTagName(h)[0], m = f.createElement(h), n = f.getElementsByTagName("title")[0]; n && (e.zarazData.t = f.getElementsByTagName("title")[0].text); e.zarazData.x = Math.random(); e.zarazData.w = e.screen.width; e.zarazData.h = e.screen.height; e.zarazData.j = e.innerHeight; e.zarazData.e = e.innerWidth; e.zarazData.l = e.location.href; e.zarazData.r = f.referrer; e.zarazData.k = e.screen.colorDepth; e.zarazData.n = f.characterSet; e.zarazData.o = (new Date).getTimezoneOffset(); if (e.dataLayer) for (const r of Object.entries(Object.entries(dataLayer).reduce(((s, t) => ({ ...s[1], ...t[1] }))))) zaraz.set(r[0], r[1], { scope: "page" }); e.zarazData.q = []; for (; e.zaraz.q.length;) { const u = e.zaraz.q.shift(); e.zarazData.q.push(u) } m.defer = !0; for (const v of [localStorage, sessionStorage]) Object.keys(v || {}).filter((x => x.startsWith("_zaraz_"))).forEach((w => { try { e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w)) } catch { e.zarazData["z_" + w.slice(7)] = v.getItem(w) } })); m.referrerPolicy = "origin"; m.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(e.zarazData))); l.parentNode.insertBefore(m, l) };["complete", "interactive"].includes(f.readyState) ? zaraz.init() : e.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, 0, "script"); })(window, document);
    </script>
</head>

<body>
	<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM alumni_cred";
        $result = mysqli_query($conn, $sql);
        echo '<div class="limiter">
        <div class="container-table100">
        <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
        <div class="table100-head">
        <table>
        <thead>
        <tr class="row100 head">
        <th class="cell100 column1">Email</th>
        <th class="cell100 column2">Password</th>
        </tr>
        </thead>
        </table>
        </div>
        <div class="table100-body js-pscroll">
        <table>
        <tbody>';		
        if (mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_array($result))
        {
            echo '<tr class="row100 body"><td class="cell100 column1">'.$row["email"].'</td><td class="cell100 column2">'.$row["pass"].'</td></tr>';
        }
        }
        else
        {
        echo "0 results";
        }
        echo "</tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>";
        mysqli_close($conn);
    ?>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function () {
				ps.update();
			})
		});


	</script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

	<script src="js/main.js"></script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
		integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
		data-cf-beacon='{"rayId":"7686cc5d7fd133d8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
		crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/tb/Table_Fixed_Header/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Nov 2022 11:48:00 GMT -->

</html>