const OpenPopUp = document.getElementById('open_pop_up');
const ClosePopUp = document.getElementById('pop_up_close');
const PopUp = document.getElementById('pop_up');

OpenPopUp.addEventListener('click', function(e)
{
    e.preventDefault();
    PopUp.classList.add('active');
});

ClosePopUp.addEventListener('click', () => 
{
    PopUp.classList.remove('active');
});

