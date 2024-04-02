<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Budget</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .container {
      width: 80%;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .header {
      font-size: 24px;
      font-weight: bold;
      color: green;
    }

    .content {
      margin-top: 20px;
    }

    .input-group {
      display: flex;
      margin-bottom: 20px;
    }

    .input-group label {
      flex: 1;
      margin-right: 10px;
    }

    .input-group input {
      flex: 2;
      padding: 5px;
    }

    .input-group button {
      padding: 5px 10px;
      background-color: green;
      color: white;
      border: none;
      cursor: pointer;
    }

    .table-container {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
    table td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    table th {
      background-color: #f2f2f2;
    }

    .gross-total {
      margin-top: 20px;
      text-align: right;
    }

    .gross-total span:first-child {
      font-weight: bold;
    }

    #gross-total-value {
      font-weight: bold;
      color: purple;
    }
  </style>
  <body>
    <div class="container">
      <div class="header">Budget...</div>
      <div class="content">
        <div class="input-group">
          <label for="particular">Particular</label>
          <input type="text" id="particular" />
          <label for="price">Price</label>
          <input type="text" id="price" />
          <label for="quantity">Qty.</label>
          <input type="text" id="quantity" />
          <button>Add to Sheet</button>
        </div>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>SnNo</th>
                <th>Particular</th>
                <th>Price</th>
                <th>Qty.</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <!-- Table rows will be dynamically added here -->
            </tbody>
          </table>
          <div class="gross-total">
            <span>Gross Total</span>
            <span id="gross-total-value">0</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
