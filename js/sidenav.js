$(".button-collapse").sideNav();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);

$('.button-collapse').sideNav({
edge: 'right', // Choose the horizontal origin
closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
});

$('.button-collapse').sideNav('show');
// Hide sideNav
$('.button-collapse').sideNav('hide');