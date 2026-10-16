
"use strict";

// Ano automático no rodapé
const yearElement = document.getElementById("year");

if (yearElement) {
  yearElement.textContent = new Date().getFullYear();
}

// Alternar tema claro e escuro
const themeToggle = document.getElementById("themeToggle");
const themeIcon = document.getElementById("themeIcon");
const themeColor = document.querySelector('meta[name="theme-color"]');

function setTheme(isLight) {
  document.body.classList.toggle("light-theme", isLight);

  if (themeIcon) {
    themeIcon.textContent = isLight ? "☾" : "☀";
  }

  if (themeToggle) {
    themeToggle.setAttribute(
      "aria-label",
      isLight ? "Ativar tema escuro" : "Ativar tema claro"
    );
  }

  if (themeColor) {
    themeColor.content = isLight ? "#f5f4fb" : "#080811";
  }
}

if (themeToggle) {
  themeToggle.addEventListener("click", () => {
    const isLight = !document.body.classList.contains("light-theme");
    setTheme(isLight);
  });
}

// Animação das seções ao aparecerem na tela
const revealElements = document.querySelectorAll(".reveal");

if ("IntersectionObserver" in window) {
  const observer = new IntersectionObserver(
    (entries, currentObserver) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          currentObserver.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.12
    }
  );

  revealElements.forEach((element) => observer.observe(element));
} else {
  revealElements.forEach((element) => element.classList.add("visible"));
}

// Copiar telefone
const copyButton = document.getElementById("copyPhone");
const toast = document.getElementById("toast");
const phoneNumber = "+5534997699986";

async function copyPhone() {
  try {
    if (navigator.clipboard && window.isSecureContext) {
      await navigator.clipboard.writeText(phoneNumber);
    } else {
      const temporaryInput = document.createElement("textarea");

      temporaryInput.value = phoneNumber;
      temporaryInput.setAttribute("readonly", "");
      temporaryInput.style.position = "fixed";
      temporaryInput.style.opacity = "0";

      document.body.appendChild(temporaryInput);
      temporaryInput.select();

      const copied = document.execCommand("copy");
      temporaryInput.remove();

      if (!copied) {
        throw new Error("Não foi possível copiar.");
      }
    }

    if (toast) {
      toast.textContent = "Telefone copiado com sucesso!";
    }
  } catch (error) {
    if (toast) {
      toast.textContent = "Não foi possível copiar. Número: " + phoneNumber;
    }
  }
}

if (copyButton) {
  copyButton.addEventListener("click", copyPhone);
}

// Voltar ao topo
const backToTop = document.getElementById("backToTop");

if (backToTop) {
  backToTop.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
}
