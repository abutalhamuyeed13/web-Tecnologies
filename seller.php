<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    form {
        flex-direction: column;
        margin-bottom: 20px;
    }
    form label {
        margin-bottom: 5px;
        font-weight: bold;
    }
    form input[type="text"],
    form input[type="number"] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    form button {
        padding: 10px;
        background-color: rgb(108, 22, 189);
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    form button:hover {
        background-color: #6414a3;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .pdf-button {
        margin-top: 20px;
        padding: 10px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: inline-block;
    }
    .pdf-button:hover {
        background-color: #333;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Product Management</h2>
    <form action="products.php" method="post">
        <label for="product_name">Product Name</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" required>

        <button type="submit">Add Product</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        <!-- Table rows go here -->
        </tbody>
    </table>

    <button class="pdf-button" style=" display: block;
    margin: 0 auto;" onclick="generatePDF()">Generate PDF Invoice</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    async function generatePDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.text("Invoice", 10, 10);

        // Add table content from HTML to PDF
        // For simplicity, we are adding static content here.
        // You can loop through the table rows and add dynamic content.

        doc.text("Customer ID: 12345", 10, 20);
        doc.text("Product Name: Sample Product", 10, 30);
        doc.text("Quantity: 1", 10, 40);
        doc.text("Time: 12:00 PM", 10, 50);

        doc.save("invoice.pdf");
    }
</script>


</body>



<!--$servername = "localhost";-->
<!--$username = "root";-->
<!--$password = "";-->
<!--$database = "online_shopping_system";-->
<!-- Create connection-->
<!--$conn = new mysqli($servername, $username, $password, $database);-->
<!---->
<!--// Check connection-->
<!--if ($conn->connect_error) {-->
<!--die("Connection failed: " . $conn->connect_error);-->
<!--}-->

