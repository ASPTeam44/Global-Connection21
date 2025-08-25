// Simple search auto-suggestions
const suggestions=['Electronics','Apparel','Machinery','Furniture'];
const searchInput=document.querySelector('.search-bar input');
if(searchInput){
  searchInput.addEventListener('input',e=>{
    const list=document.getElementById('suggestions');
    if(!list)return;
    list.innerHTML='';
    suggestions.filter(s=>s.toLowerCase().includes(e.target.value.toLowerCase())).forEach(s=>{
      const li=document.createElement('li');li.textContent=s;list.appendChild(li);
    });
  });
}
// Fade-in animation on scroll
const faders=document.querySelectorAll('.fade-in');
const observer=new IntersectionObserver(entries=>{
  entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('visible');}});
});
faders.forEach(f=>observer.observe(f));
