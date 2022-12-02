const sidebarMenu = document.querySelector('.sidebar-menu');
const sidebarItem = document.querySelectorAll('.sidebar-menu-link');
const logoItem = document.querySelector('.sidebar-logo');
const menuItemContent = [...document.querySelectorAll('.block-item')];
const blockHome = document.querySelector('.block-home');
const blockComing = document.querySelector('.block-coming-soon');
const blockTerms = document.querySelector('.block-terms-of-service');
const sidebarLinkTerms = document.querySelector('.sidebar-menu-link.terms');
const termsLink = document.querySelector('.terms-link.tab');

const body = document.querySelector('body');
const containerBlock = document.querySelector('.block');
const burger = document.getElementById('burger');
const blockHelpTitle = document.querySelectorAll('.block-help-content-title-tab');
const blockHelpContent = document.querySelector('.block-help-content');

const blockPrivacy = document.querySelector('.block-privacy');
const privacyLink = [...document.querySelectorAll('.terms-link.privacy')];
const sidebarLinkPrivacy = document.querySelector('.sidebar-menu-link.privacy');
const currentUrl = location.hash;

console.log(currentUrl)
const textArea = document.querySelector('.block-help-form-support-textarea');
if (textArea) {
  document.querySelector('.block-help-form-support-textarea').innerHTML = '';
}

blockHelpTitle.forEach((item) => {
  item.addEventListener('click', () => {
    blockHelpContent.classList.remove('no-active');
    aboutChoouseTab.forEach(item => item.classList.remove('active'));
  });
});


function showBlockPrivacy() {
  resetClassSelect();
  menuItemContent.forEach(item => item.classList.remove('active'));
  sidebarItem.forEach(el => el.classList.remove('active'));
  blockPrivacy.classList.add('active');
  sidebarLinkPrivacy.classList.add('active');
  window.scroll(0, 0);
};
privacyLink.forEach((el) => {
  el.addEventListener('click', showBlockPrivacy)
})

function showBlockTerms() {
  resetClassSelect();
  menuItemContent.forEach(item => item.classList.remove('active'));
  sidebarItem.forEach(el => el.classList.remove('active'));
  blockTerms.classList.add('active');
  sidebarLinkTerms.classList.add('active');
  window.scroll(0, 0);
};

if (termsLink) {
  termsLink.addEventListener('click', showBlockTerms);
}
if (burger) {
  burger.addEventListener('click', togleNav);

}

function togleNav() {
  if (burger.classList.contains('change')) {
    burger.classList.remove('change');
    body.classList.remove('active');
    sidebarMenu.classList.remove('active');
  } else {
    burger.classList.add('change');
    body.classList.add('active');
    sidebarMenu.classList.add('active');
  }
}

if (logoItem) {
  logoItem.addEventListener('click', showBlockHome);

}

function showBlockHome() {
  resetClassSelect();
  menuItemContent.forEach(item => item.classList.remove('active'));
  sidebarItem.forEach(el => el.classList.remove('active'));
  blockHome.classList.add('active');
};

sidebarItem.forEach((item) => {
  item.addEventListener('click', (event) => {
    sidebarItem.forEach(el => el.classList.remove('active'));
    event.target.classList.add('active');
    window.scroll(0, 0);
  });
});

sidebarItem.forEach((item) => {
  item.addEventListener('click', selectTabNav);
});

function selectTabNav() {
  let tabName = this;
  tabName.classList.add('active');
  tabName = this.getAttribute("data-menu-link");
  selectTabName(tabName);
}

function selectTabName(tabName) {
  menuItemContent.forEach((item) => {
    let checkItem = item.dataset.block;
    if (checkItem == tabName) {
      resetClassSelect();
      item.classList.add("active");
    } else item.classList.remove("active");
  })
}

const listNavItems = document.querySelectorAll('.block-help-content-row-list-item');

listNavItems.forEach((item) => {

  item.addEventListener('click', (i) => {
    console.log(i)
    let guide;
    let trouble;
    let privacy;

    chooseHelpItem;
    let plus = item.classList.contains('plus');
    listNavItems.forEach((items) => {
      if (plus && window.innerWidth > 620) {
        items.classList.remove('minus');
        items.classList.add('plus');
      }
    });
    if (plus && window.innerWidth > 1026) {
      item.classList.remove('plus');
      item.classList.add('minus');
    } else {
      item.classList.remove('minus');
      item.classList.add('plus');
    }

    if (window.innerWidth < 1026) {
      if (plus) {
        item.classList.remove('plus');
        item.classList.add('minus');
      } else {
        item.classList.add('plus');
        item.classList.remove('minus');
      }
    }
  });

  if (window.innerWidth < 1026) {
    item.classList.remove('minus');
    item.classList.add('plus');
  } else {
    return;
  }
});

listNavItems.forEach((item) => {
  item.addEventListener('click', chooseHelpItem);
});

function chooseHelpItem() {
  let tabName = this;
  tabName = this.getAttribute("data-helpchooseitem");
  chooseTabName(tabName);
}

const chooseHelpContent = document.querySelectorAll('.block-help-content-row-wrapper-container');
const chooseHelpContentMobile = document.querySelectorAll('.block-help-content-row-wrapper-container-mobile');
const submitCarers = document.getElementById('submit-careers');

if (submitCarers) {
  submitCarers.addEventListener('click', showBlockOpportunities);

}

function showBlockOpportunities() {
  menuItemContent.forEach(item => item.classList.remove('active'));
  blockComing.classList.add('active');
}


function chooseTabName(tabName) {
  chooseHelpContent.forEach((item) => {
    let checkItem = item.dataset.helpchoosecontent;
    if (checkItem == tabName) {
      item.classList.toggle("active");
    } else {
      item.classList.remove("active");
    }
  });
  chooseHelpContentMobile.forEach((item) => {
    let checkItemMobile = item.dataset.helpchoosecontentmobile;
    if (checkItemMobile == tabName && window.innerWidth < 1026) {
      item.classList.toggle("active");
    }
  });
}

const selectHelpItem = document.querySelectorAll('.block-help-content-tab-item');
const aboutChoouseTab = document.querySelectorAll('.block-help-content-choose-tab');
const containerHelpItem = document.querySelector('.block-help-content');

selectHelpItem.forEach((item) => {
  item.addEventListener('click', selectIHelpItem);
});

function selectIHelpItem() {
  let chooseHelpName = this;
  console.log();

  chooseHelpName.classList.add('active');
  chooseHelpName = this.getAttribute("data-helpchoose");
  selectFirstEl(chooseHelpName);
  selectIHelpItemName(chooseHelpName);

}

let guideNavItem = [...document.querySelectorAll('.block-help-content-row-list.guide li.block-help-content-row-list-item')];
let troubleshootingNavItem = [...document.querySelectorAll('.block-help-content-row-list.troubleshooting li.block-help-content-row-list-item')];
let safetyNavItem = [...document.querySelectorAll('.block-help-content-row-list.safety li.block-help-content-row-list-item')];

let guideContent = [...document.querySelectorAll('.block-help-content-row-wrapper.guide .block-help-content-row-wrapper-container')];
let troubleshootingContent = [...document.querySelectorAll('.block-help-content-row-wrapper.troubleshooting .block-help-content-row-wrapper-container')];
let safetyContent = [...document.querySelectorAll('.block-help-content-row-wrapper.safety .block-help-content-row-wrapper-container')];


function selectFirstEl(chooseHelpName) {
  if (window.innerWidth > 1025) {
    if (chooseHelpName == 'guide') {
      guideContent.forEach((el) => {
        el.classList.remove('minus');
      });
      guideNavItem[0].classList.add('minus');
      guideContent[0].classList.add('active');
    }
    if (chooseHelpName == 'troubleshooting') {
      troubleshootingContent.forEach((el) => {
        el.classList.remove('minus');
      });
      troubleshootingNavItem[0].classList.add('minus');
      troubleshootingContent[0].classList.add('active');

    }
    if (chooseHelpName == 'safety') {
      safetyContent.forEach((el) => {
        el.classList.remove('minus');
      });
      safetyNavItem[0].classList.add('minus');
      safetyContent[0].classList.add('active');
    }
  }
}

function selectIHelpItemName(chooseHelpName) {
  aboutChoouseTab.forEach((item) => {
    let checkItem = item.dataset.aboutchoosetab;
    if (checkItem == chooseHelpName) {
      item.classList.add("active");
      if (containerHelpItem) {
        containerHelpItem.classList.add('no-active');

      }
    } else item.classList.remove("active");
  });
}

function resetClassSelect() {
  if (containerHelpItem) {
    containerHelpItem.classList.add('no-active');
  }
  aboutChoouseTab.forEach(item => item.classList.remove('active'));
  burger.classList.remove('change');
  sidebarMenu.classList.remove('active');
  body.classList.remove('active');
}

$(document).ready(function () {

  $('#submit-support').click(function () {

    var validRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let name = $('#name').val();
    let email = $('#email').val();
    let message = $('#message').val();
    let textInfo = $('.text-info.list').length;


    if (name == '' || email == '') {
      if (textInfo > 0) {
        console.log(textInfo)
        $('.response-support').html('<span class="text-error"></span>');

        $('.wrapper-support-fields').fadeIn("slow");
      } else {
        console.log(textInfo)
        $('.response-support').fadeIn(1000);
        $('.response-support').html('<span class="text-error">Please required name and email fields.</span>');
      }

    } else {

      if (!validRegex.test(email)) {
        $('.response-support').html('<span class="text-error">Please required email fields.</span>');
      } else {
        $.ajax({
          url: "index.php",
          method: "POST",
          data: $('#submit-support-form').serialize(),
          beforeSend: function () {
            $('.response-support').html('<span class="text-info">Loading response...</span>');
          },
          success: function (data) {
            $('form').trigger("reset");
            setTimeout(function () {
              $('.wrapper-support-fields').fadeOut("slow");
            }, 600);
            setTimeout(function () {
              $('.response-support').html('<span class="text-info list">Thank you for your request</span>');
            }, 1500);
          }
        });
      }

    }
  });


  $('#submit-report').click(function () {

    let report_message = $('#report_message').val();
    let reportBtn = $('#submit-report')[0].outerText;
    let textreportBTn = 'Report again';

    if (report_message == '') {
      if (reportBtn == textreportBTn) {
        $('.response').addClass('remove');
      } else {
        $('.response').removeClass('remove');
        $('.response').html('<span class="text-error">Please write message.</span>');
      }
    } else {
      $.ajax({
        url: "index.php",
        method: "POST",
        data: $('#submit-report-form').serialize(),
        beforeSend: function () {
          $('.response').html('<span class="text-info">Loading response...</span>');
        },
        success: function (data) {
          $('form').trigger("reset");
          $('#report_message').addClass('remove');
          $('.block-help-label-title.title-input').html('Thank you for your report');
          $('#submit-report').html('<span>Report again</span>');
          $('.response').addClass('remove');
          // $('#response').fadeIn().html(data);
          setTimeout(function () {
            $('.response').fadeOut("slow");
          }, 500);
        }
      });
    }
  });

  $('#submit-report-desktop').click(function () {

    let report_second = $('#report_second').val();
    let reportBtn = $('#submit-report-desktop')[0].outerText;
    let textreportBTn = 'Report again';

    // console.log(reportBtn);
    if (report_second == '') {
      if (reportBtn == textreportBTn) {
        $('.response').addClass('remove');
      } else {
        $('.response').removeClass('remove');
        $('.response').html('<span class="text-error">Please write message.</span>');
      }
    } else {
      $.ajax({
        url: "index.php",
        method: "POST",
        data: $('#submit-report-form-desktop').serialize(),
        beforeSend: function () {
          $('.response').html('<span class="text-info">Loading response...</span>');
        },
        success: function (data) {
          $('form').trigger("reset");
          $('#report_second').addClass('remove');
          $('.block-help-label-title.title-input').html('Thank you for your report');
          $('#submit-report-desktop').html('<span>Report again</span>');
          $('.response').addClass('remove');
          // $('.response').fadeIn().html(data);
          setTimeout(function () {
            $('.response').fadeOut("slow");
          }, 500);
        }
      });
    }
  });

  $('#submit-report-desktop').click(function () {
    $('#submit-report-desktop').html('<span>Send report</span>');
    $('.block-help-label-title.title-input').html('Send a bug report');
    $('#report_second').removeClass('remove');
  });

  $('#submit-report').click(function () {
    $('#submit-report').html('<span>Send report</span>');
    $('.block-help-label-title.title-input').html('Send a bug report');
    $('#report_message').removeClass('remove');
  });
});


$(document).ready(function () {
  $('.sidebar-menu-link a').click(function () {
    if ($(this).parent().hasClass('active')) {
      return false;
    }
    $('.sidebar-menu-link a').removeClass('active');
    $(this).parent().addClass('active');
  });
});

// $(document).ready(function(){
//   $('.sidebar a').click(function(){
//     if($(this).parent().hasClass('active')){
//       return false;
//     }
//     $('.sidebar a').removeClass('active');
//     $(this).parent().addClass('active');
//   });
// });
