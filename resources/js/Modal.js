export function initModal(modalId, openBtnId, closeBtnId) {
  const modal = document.getElementById(modalId);
  const modalContent = modal.querySelector("div"); // ambil konten utama modal
  const openBtn = document.getElementById(openBtnId);
  const closeBtn = document.getElementById(closeBtnId);

  if (!modal || !modalContent || !openBtn || !closeBtn) return;

  const openModal = () => {
    modal.classList.remove("hidden");
    setTimeout(() => {
      modal.classList.add("opacity-100");
      modalContent.classList.add("opacity-100", "scale-100");
      modalContent.classList.remove("opacity-0", "scale-95");
    }, 10);
  };

  const closeModal = () => {
    modal.classList.remove("opacity-100");
    modalContent.classList.remove("opacity-100", "scale-100");
    modalContent.classList.add("opacity-0", "scale-95");

    setTimeout(() => {
      modal.classList.add("hidden");
    }, 300); // sesuai duration-300
  };

  // tombol open
  openBtn.addEventListener("click", openModal);

  // tombol close
  closeBtn.addEventListener("click", closeModal);

  // klik luar modal
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeModal();
    }
  });

  // tekan ESC
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeModal();
    }
  });
}
