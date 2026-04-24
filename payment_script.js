document.addEventListener('DOMContentLoaded', () => {
  // Script for radio options.
  // Orange option is changed based on where is clicked

  deliveryAddressOption();
  paymentMethodOption();
});

function deliveryAddressOption() {
  const radios = document.querySelectorAll('input[name=delivery]');

  radios.forEach(radio => {
    radio.addEventListener('change', () => {
      // Reset all labels
      document.querySelectorAll('.delivery-add-container label')
        .forEach(label => {
          label.classList.remove('delivery-add-selected');
          label.classList.add('delivery-add');
        });

        // Set selected label
        const selectedLabel = radio.closest('label');
        selectedLabel.classList.remove('delivery-add');
        selectedLabel.classList.add('delivery-add-selected');
    });
  });
}

function paymentMethodOption() {
  const radios = document.querySelectorAll('input[name="payment"]');

  radios.forEach(radio => {
    radio.addEventListener('change', () => {
      // Reset all labels
      document.querySelectorAll('.payment-method-cont label')
        .forEach(label => {
          label.classList.remove('payment-option-selected');
          label.classList.add('payment-option');
        });
      
      // Set selected label
      const selectedLabel = radio.closest('label');
      selectedLabel.classList.remove('payment-option');
      selectedLabel.classList.add('payment-option-selected');
    });
  });
}