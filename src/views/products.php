<html>

<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

	<h1>Products</h1>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $product): ?>
				<tr>
					<td><?php echo htmlspecialchars($product['id']); ?></td>
					<td><?php echo htmlspecialchars($product['name']); ?></td>
					<td><?php echo htmlspecialchars($product['description']); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>

</html>
