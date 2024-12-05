
    // Show popup
    function showPopup() {
      document.getElementById('popupOverlay').style.display = 'block';
  }

  // Close popup
  function closePopup() {
      document.getElementById('popupOverlay').style.display = 'none';
  }

  // Accept terms and check the checkbox
  function acceptTerms() {
      document.getElementById('termsCheckbox').checked = true;
      closePopup();
  }

