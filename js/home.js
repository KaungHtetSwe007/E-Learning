
// navi responsive start
document.addEventListener('DOMContentLoaded', () => {
  const navMenu = document.getElementById('nav_menu');
  const toggleMenu = document.getElementById('toggle_menu');
  const closeMenu = document.getElementById('close_menu');

  toggleMenu.addEventListener('click', () => { 
    navMenu.classList.toggle('show_menu'); 
  });

  closeMenu.addEventListener('click', () => { 
    navMenu.classList.remove('show_menu'); 
  });
  // navi responsive end

  // dropdown start
  // Toggle dropdown when clicking on the dropdown icon
  const dropdownIcons = document.querySelectorAll('.dropdown_icon');
  dropdownIcons.forEach(icon => {
    icon.addEventListener('click', () => {
      const dropdownContent = icon.nextElementSibling;
      dropdownContent.classList.toggle('show_dropdown');
    });
  });

  // Close dropdown when clicking outside of it
  document.addEventListener('click', event => {
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
      if (!dropdown.contains(event.target)) {
        const dropdownContent = dropdown.querySelector('.dropdown-content');
        dropdownContent.classList.remove('show_dropdown');
      }
    });
  });
});
// dropdown end
// language change start
document.addEventListener('DOMContentLoaded', () => {
    const languageSelect = document.getElementById('language-select');
    const welcomeText = document.getElementById('textContent');
    const undertext = document.getElementById('tc1');
    const courses = document.getElementById('cos');
    const search=document.getElementById('search');
    const btn=document.getElementById('btn');
    const signup=document.getElementById('signup');
    const login=document.getElementById('login');
    languageSelect.addEventListener('change', () => {
        const selectedLanguage = languageSelect.value;
        if (selectedLanguage === 'en') {
            welcomeText.textContent = 'Code Your Future: Learn, Practice, Achieve!';
            undertext.textContent = 'We’re a nonprofit with the mission to provide a free, world-class education for anyone, anywhere.';
            courses.innerHTML = 'Courses <i class="bx bxs-chevron-down dropdown_icon"></i>';
            search.textContent='Search...';
            btn.innerHTML='Get Started';
            signup.innerHTML='Sign Up';
            login.innerHTML='Login';
        } else if (selectedLanguage === 'my') {
            welcomeText.textContent = 'သင်၏အနာဂတ်ကို ရေးပါ- လေ့လာပါ၊ လေ့ကျင့်ပါ၊ အောင်မြင်ပါ။';
            undertext.textContent = 'ကျွန်ုပ်တို့သည် မည်သူမဆို၊ နေရာတိုင်းတွင် အခမဲ့၊ ကမ္ဘာ့အဆင့်မီ ပညာရေးကို ပံ့ပိုးပေးရန် ရည်ရွယ်ချက်ဖြင့် အကျိုးအမြတ်မယူသော အဖွဲ့အစည်းတစ်ခုဖြစ်သည်။';
            courses.innerHTML = 'သင်တန်းများ <i class="bx bxs-chevron-down dropdown_icon"></i>';
            search.placeholder='ရှာရန်...';
            btn.innerHTML='စတင်လိုက်ပါ';
            signup.innerHTML='အကောင့်ဖွင့်ပါ';
            login.innerHTML='အကောင့်ဝင်ပါ';
        }
    });
});
// language change end
 // search start
const clearInput = () => {
  const input = document.getElementsByTagName("input")[0];
  input.value = "";
};

const clearBtn = document.getElementById("clear-btn");
clearBtn.addEventListener("click", clearInput);
// search end