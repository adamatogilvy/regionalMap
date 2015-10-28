<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <title>Regional Map</title>
    <link rel="stylesheet" href="css/all.css">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/snap.svg-min.js"></script>
    <script src="js/plugins.js"></script>
</head>
<body>
<div class="container">
    <div id="state-dropdown" class="well col-sm-4 col-sm-offset-4">
        <h4>Find a GSA region</h4>
        <form class="form-inline" id="state-selection-form">
            <div class="form-group">
                <label class="sr-only" for="state-selection">Select a state, territory, or region</label>
                <select name="state-selection" class="form-control" id="state-selection">
                    <option value="">Select a state, territory, or global region</option>
                    <option value="/r4">- Alabama</option>
                    <option value="/r10">- Alaska</option>
                    <option value="/r9">- American Samoa</option>
                    <option value="/r9">- Arizona</option>
                    <option value="/r7">- Arkansas</option>
                    <option value="/r9">- California</option>
                    <option value="/r8">- Colorado</option>
                    <option value="/r1">- Connecticut</option>
                    <option value="/r3">- Delaware</option>
                    <option value="/r11">- District of Columbia</option>
                    <option value="/r9">- East Asia</option>
                    <option value="/r3">- Europe</option>
                    <option value="/r4">- Florida</option>
                    <option value="/r4">- Georgia</option>
                    <option value="/r9">- Guam</option>
                    <option value="/r9">- Hawaii</option>
                    <option value="/r10">- Idaho</option>
                    <option value="/r5">- Illinois</option>
                    <option value="/r5">- Indiana</option>
                    <option value="/r6">- Iowa</option>
                    <option value="/r6">- Kansas</option>
                    <option value="/r4">- Kentucky</option>
                    <option value="/r7">- Louisiana</option>
                    <option value="/r1">- Maine</option>
                    <option value="/r1">- Massachusetts</option>
                    <option value="/r3">- Maryland</option>
                    <option value="/r5">- Michigan</option>
                    <option value="/r5">- Minnesota</option>
                    <option value="/r4">- Mississippi</option>
                    <option value="/r6">- Missouri</option>
                    <option value="/r8">- Montana</option>
                    <option value="/r6">- Nebraska</option>
                    <option value="/r9">- Nevada</option>
                    <option value="/r1">- New Hampshire</option>
                    <option value="/r2">- New Jersey</option>
                    <option value="/r7">- New Mexico</option>
                    <option value="/r2">- New York</option>
                    <option value="/r4">- North Carolina</option>
                    <option value="/r8">- North Dakota</option>
                    <option value="/r5">- Ohio</option>
                    <option value="/r7">- Oklahoma</option>
                    <option value="/r10">- Oregon</option>
                    <option value="/r3">- Pennsylvania</option>
                    <option value="/r2">- Puerto Rico</option>
                    <option value="/r1">- Rhode Island</option>
                    <option value="/r4">- South Carolina</option>
                    <option value="/r8">- South Dakota</option>
                    <option value="/r4">- Tennessee</option>
                    <option value="/r7">- Texas</option>
                    <option value="/r2">- US Virgin Islands</option>
                    <option value="/r8">- Utah</option>
                    <option value="/r3">- Virginia</option>
                    <option value="/r1">- Vermont</option>
                    <option value="/r10">- Washington</option>
                    <option value="/r3">- West Virginia</option>
                    <option value="/r5">- Wisconsin</option>
                    <option value="/r8">- Wyoming</option>
                </select>
                <button id="submit-state" type="button"><span class="icon-arrow-right"></span></button>
            </div>
        </form>
    </div>

    <svg id="map-canvas" width="100%" height="100%" viewBox="0 0 1300 900"></svg>

</div>
<div id="user-input">
	<h3>Region clicks links to:</h3>
	<table>
		<caption>Region clicks link map</caption>
		<thead>
			<tr>
				<th>Region</th>
				<th>Link</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td class="r1-link">http://shmish.com</td>
			</tr>
			<tr>
				<td>2</td>
				<td class="r2-link">http://google.com</td>
			</tr>
			<tr>
				<td>3</td>
				<td class="r3-link">http://yahoo.com</td>
			</tr>
			<tr>
				<td>4</td>
				<td class="r4-link">http://netflix.com</td>
			</tr>
			<tr>
				<td>5</td>
				<td class="r5-link">http://godaddy.com</td>
			</tr>
			<tr>
				<td>6</td>
				<td class="r6-link">http://bing.com</td>
			</tr>
		</tbody>
	</table>
</div>

    <script src="js/app.js"></script>
</body>
</html>