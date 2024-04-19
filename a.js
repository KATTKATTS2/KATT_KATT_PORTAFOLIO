(() => {
  "use strict";

  const getElement = (selector, context = document) => {
    const element = context.querySelector(selector);
    if (!element) throw new Error(`Element not found: ${selector}`);
    return element;
  };

  const getElements = (selector, context = document) => {
    return [].slice.call(context.querySelectorAll(selector));
  };

  const ValidationType = {
    REQUIRED: "required",
    EMAIL: "email",
    LENGTH: "length",
    CHECKED: "checked"
  };

  class Validator {
    constructor(input, validations, onChange) {
      this.input = input;
      this.validations = validations;
      this.onChange = onChange;
      this.isValid = false; // Inicialmente, considera que el input no es válido

      input.dataset.sbCanSubmit = "no"; // Inicia todos los campos como no válidos
      this.input.addEventListener("input", () => this.handleInput());
      this.input.addEventListener("blur", () => this.handleInput());
    }

    handleInput() {
      let isValid = true;
      this.validations.forEach(validation => {
        isValid = isValid && this.performValidation(this.input, validation);
      });

      this.isValid = isValid; // Actualiza el estado de validez del input
      this.input.dataset.sbCanSubmit = isValid ? "yes" : "no";
      this.onChange();

      if (isValid) {
        this.input.classList.remove("is-invalid");
      } else {
        this.input.classList.add("is-invalid");
      }
    }

    performValidation(input, validationType) {
      switch (validationType) {
        case ValidationType.REQUIRED:
          return input.value.trim() !== "";
        case ValidationType.EMAIL:
          return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(input.value);
        case ValidationType.LENGTH:
          return input.value.length >= 8;
        case ValidationType.CHECKED:
          return input.checked;
        default:
          return false;
      }
    }
  }

  window.addEventListener("DOMContentLoaded", () => {
    const inputs = getElements("input[data-sb-validations], textarea[data-sb-validations]");
    inputs.forEach(input => {
      const validations = input.dataset.sbValidations.split(",").map(v => v.trim());
      new Validator(input, validations, updateSubmitButtonState);
    });

    updateSubmitButtonState(); // Verifica el estado inicial de los botones
  });

  function updateSubmitButtonState() {
    const submitButton = getElement("#submitButton");
    const inputs = getElements("input[data-sb-can-submit], textarea[data-sb-can-submit]");
    const allValid = inputs.every(input => input.dataset.sbCanSubmit === "yes");

    submitButton.classList.toggle("disabled", !allValid);
    submitButton.disabled = !allValid;
  }
})();
