function checkStockStatus() {
    // Get the product table body
    const tableBody = document.getElementById('productTableBody');
    
    // Get the notification container
    const notificationContainer = document.getElementById('notificationContainer');
    
    // Clear existing notifications
    notificationContainer.innerHTML = '';
  
    // Iterate over the table rows
    const rows = tableBody.getElementsByTagName('tr');
    for (let i = 0; i < rows.length; i++) {
      const row = rows[i];
      
      // Get product ID and stock status from data attributes
      const productId = row.getAttribute('data-product-id');
      const stockStatus = parseInt(row.getAttribute('data-stock-status'));
  
      // Check stock status and generate notification
      let notificationMessage = '';
      if (stockStatus >= 1 && stockStatus <= 9) {
        notificationMessage = 'Product ' + productId + ' is low in stock.';
      } else if (stockStatus <= 0) {
        notificationMessage = 'Product ' + productId + ' is out of stock.';
      }
  
      // Add the notification to the container
      if (notificationMessage !== '') {
        const notification = document.createElement('div');
        notification.innerText = notificationMessage;
        notificationContainer.appendChild(notification);
      }
    }
  }
  