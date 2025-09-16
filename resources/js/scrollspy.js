// //   - Panggil setelah Preline sudah di-load
// //   - Tidak mengubah HTML
// //   - Mem-portal menu ke body saat dibuka (menghindari clipping)
// //   - Memutar SVG panah saat terbuka
// //   - Menutup dropdown lain saat membuka satu
// // */
// export function initPrelineDropdownFix() {
//     // cari semua dropdown di navbar (sesuai markup Preline)
//     const dropdowns = Array.from(document.querySelectorAll(".hs-dropdown"));

//     // helper: restore menu ke parent (kapan perlu)
//     function restoreMenu(menu) {
//         const placeholder = menu.__placeholder;
//         const origParent = menu.__origParent;
//         if (placeholder && origParent) {
//             // jika menu saat ini di body, kembalikan ke tempat semula
//             if (menu.parentElement !== origParent) {
//                 origParent.insertBefore(menu, placeholder);
//             }
//             // bersihkan atribut
//             placeholder.remove();
//             delete menu.__placeholder;
//             delete menu.__origParent;
//         }
//         // reset inline styles
//         menu.style.position = "";
//         menu.style.top = "";
//         menu.style.left = "";
//         menu.style.zIndex = "";
//         menu.style.minWidth = "";
//         menu.classList.add("hidden"); // samakan behavior preline
//     }

//     // helper: posisi & portal menu
//     function portalAndPosition(menu, toggle) {
//         // simpan original parent + placeholder jika belum ada
//         if (!menu.__origParent) {
//             menu.__origParent = menu.parentElement;
//             const ph = document.createComment("dropdown-placeholder");
//             menu.__origParent.insertBefore(ph, menu);
//             menu.__placeholder = ph;
//         }

//         // pindahkan ke body agar tidak ter-clip
//         if (menu.parentElement !== document.body) {
//             document.body.appendChild(menu);
//         }

//         // tampilkan
//         menu.classList.remove("hidden");
//         menu.classList.add("dropdown-portal");

//         // posisi absolut berdasarkan toggle
//         const r = toggle.getBoundingClientRect();
//         // letakkan sedikit di bawah toggle, align start (kamu bisa ubah alignment sesuai kebutuhan)
//         const left = Math.max(8, r.left + window.scrollX);
//         const top = r.bottom + window.scrollY + 6; // offset 6px
//         menu.style.position = "absolute";
//         menu.style.left = `${left}px`;
//         menu.style.top = `${top}px`;
//         menu.style.zIndex = 1200;
//         // minimal width agar dropdown tidak mengecil
//         if (!menu.style.minWidth)
//             menu.style.minWidth = `${Math.max(200, r.width)}px`;
//     }

//     // close all dropdowns helper
//     function closeAllDropdowns(except = null) {
//         document.querySelectorAll(".hs-dropdown.custom-open").forEach((dd) => {
//             if (dd === except) return;
//             const btn = dd.querySelector(".hs-dropdown-toggle");
//             const menu = dd.querySelector(".hs-dropdown-menu");
//             dd.classList.remove("custom-open");
//             if (btn) btn.setAttribute("aria-expanded", "false");
//             if (menu) {
//                 // rotate back icon
//                 const svgs = btn ? btn.querySelectorAll("svg") : [];
//                 const chevron = svgs[svgs.length - 1];
//                 if (chevron) chevron.classList.remove("rotated");
//                 // restore position
//                 restoreMenu(menu);
//             }
//         });
//     }

//     // Setup each dropdown
//     dropdowns.forEach((dd) => {
//         // avoid multiple init
//         if (dd.__prelineFixInit) return;
//         dd.__prelineFixInit = true;

//         const toggle = dd.querySelector(".hs-dropdown-toggle");
//         const menu = dd.querySelector(".hs-dropdown-menu");
//         if (!toggle || !menu) return;

//         // identify chevron svg (biasanya svg terakhir di toggle)
//         const svgs = Array.from(toggle.querySelectorAll("svg"));
//         const chevron = svgs.length ? svgs[svgs.length - 1] : null;
//         if (chevron) chevron.classList.add("rotate-target");

//         // click toggle => open / close
//         toggle.addEventListener("click", (ev) => {
//             ev.stopPropagation();
//             const isOpen = dd.classList.contains("custom-open");

//             if (isOpen) {
//                 // close
//                 dd.classList.remove("custom-open");
//                 toggle.setAttribute("aria-expanded", "false");
//                 if (chevron) chevron.classList.remove("rotated");
//                 restoreMenu(menu);
//             } else {
//                 // open
//                 closeAllDropdowns(dd);
//                 dd.classList.add("custom-open");
//                 toggle.setAttribute("aria-expanded", "true");

//                 // portal menu out of parent to avoid clipping & position it
//                 portalAndPosition(menu, toggle);

//                 // rotate chevron
//                 if (chevron) chevron.classList.add("rotated");
//             }
//         });

//         // Support hover for larger screens (optional)
//         let hoverTimeout;
//         dd.addEventListener("mouseenter", () => {
//             if (window.innerWidth >= 768) {
//                 clearTimeout(hoverTimeout);
//                 if (!dd.classList.contains("custom-open")) {
//                     closeAllDropdowns(dd);
//                     dd.classList.add("custom-open");
//                     toggle.setAttribute("aria-expanded", "true");
//                     portalAndPosition(menu, toggle);
//                     if (chevron) chevron.classList.add("rotated");
//                 }
//             }
//         });
//         dd.addEventListener("mouseleave", () => {
//             if (window.innerWidth >= 768) {
//                 // beri delay kecil supaya sub menu masih bisa diinteraksi
//                 hoverTimeout = setTimeout(() => {
//                     if (dd.classList.contains("custom-open")) {
//                         dd.classList.remove("custom-open");
//                         toggle.setAttribute("aria-expanded", "false");
//                         if (chevron) chevron.classList.remove("rotated");
//                         restoreMenu(menu);
//                     }
//                 }, 180);
//             }
//         });

//         // reposition saat scroll/resize kalau menu terbuka
//         const reposition = () => {
//             if (!dd.classList.contains("custom-open")) return;
//             portalAndPosition(menu, toggle);
//         };
//         window.addEventListener("resize", reposition);
//         window.addEventListener("scroll", reposition, true);
//     });

//     // close when click outside
//     document.addEventListener("click", (ev) => {
//         // jika klik di dalam dropdown , ignore (toggle click sudah stopPropagation)
//         if (ev.target.closest(".hs-dropdown")) return;
//         closeAllDropdowns();
//     });

//     // close on ESC
//     document.addEventListener("keydown", (ev) => {
//         if (ev.key === "Escape") {
//             closeAllDropdowns();
//         }
//     });
// }
