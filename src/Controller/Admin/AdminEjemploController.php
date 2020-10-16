<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminEjemploController extends AbstractController
{
    /**
     * @Route("/admin/ejemplo", name="admin_ejemplo_index")
     */
    public function index()
    {
        return $this->render('admin/ejemplos/index.html.twig.twig');
    }

    /**
     * @Route("/admin/ejemplo/index2", name="admin_ejemplo_index2")
     */
    public function index2()
    {
        return $this->render('admin/ejemplos/index2.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/calendar", name="admin_ejemplo_calendar")
     */
    public function appsCalendar()
    {
        return $this->render('admin/ejemplos/apps_calendar.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/chat", name="admin_ejemplo_chat")
     */
    public function appschat()
    {
        return $this->render('admin/ejemplos/apps_chat.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/contacts", name="admin_ejemplo_contacts")
     */
    public function appsContacts()
    {
        return $this->render('admin/ejemplos/apps_contacts.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/invoice", name="admin_ejemplo_invoice")
     */
    public function appsInvoice()
    {
        return $this->render('admin/ejemplos/apps_invoice.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/mailbox", name="admin_ejemplo_mailbox")
     */
    public function appsMailbox()
    {
        return $this->render('admin/ejemplos/apps_mailbox.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/notes", name="admin_ejemplo_notes")
     */
    public function appsNotes()
    {
        return $this->render('admin/ejemplos/apps_notes.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/scrumboard", name="admin_ejemplo_scrumboard")
     */
    public function appsScrumboard()
    {
        return $this->render('admin/ejemplos/apps_scrumboard.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/todoList", name="admin_ejemplo_todoList")
     */
    public function appsTodoList()
    {
        return $this->render('admin/ejemplos/apps_todoList.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/lockscreen", name="admin_ejemplo_lockscreen")
     */
    public function authLockscreen()
    {
        return $this->render('admin/ejemplos/auth_lockscreen.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/lockscreen-boxed", name="admin_ejemplo_lockscreen_boxed")
     */
    public function authLockscreenBoxed()
    {
        return $this->render('admin/ejemplos/auth_lockscreen_boxed.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/login", name="admin_ejemplo_login")
     */
    public function authLogin()
    {
        return $this->render('admin/ejemplos/auth_login.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/login-boxed", name="admin_ejemplo_login_boxed")
     */
    public function authLoginBoxed()
    {
        return $this->render('admin/ejemplos/auth_login_boxed.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/pass-recovery", name="admin_ejemplo_pass_recovery")
     */
    public function authPassRecovery()
    {
        return $this->render('admin/ejemplos/auth_pass_recovery.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/pass-recovery-boxed", name="admin_ejemplo_pass_recovery_boxed")
     */
    public function authPassRecoveryBoxed()
    {
        return $this->render('admin/ejemplos/auth_pass_recovery_boxed.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/register", name="admin_ejemplo_register")
     */
    public function authRegister()
    {
        return $this->render('admin/ejemplos/auth_register.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/register-boxed", name="admin_ejemplo_register_boxed")
     */
    public function authRegisterBoxed()
    {
        return $this->render('admin/ejemplos/auth_register_boxed.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/charts-apex", name="admin_ejemplo_charts_apex")
     */
    public function chartsApex()
    {
        return $this->render('admin/ejemplos/charts_apex.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-accordion", name="admin_ejemplo_component_accordion")
     */
    public function componentAccordion()
    {
        return $this->render('admin/ejemplos/component_accordion.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-blockui", name="admin_ejemplo_component_blockui")
     */
    public function componentBlockui()
    {
        return $this->render('admin/ejemplos/component_blockui.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-bootstrap-carousel",
     *     name="admin_ejemplo_component_bootstrap_carousel")
     */
    public function componentBootstrapCarousel()
    {
        return $this->render('admin/ejemplos/component_bootstrap_carousel.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-cards", name="admin_ejemplo_component_cards")
     */
    public function componentCards()
    {
        return $this->render('admin/ejemplos/component_cards.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-countdown", name="admin_ejemplo_component_countdown")
     */
    public function componentCountdown()
    {
        return $this->render('admin/ejemplos/component_countdown.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-counter", name="admin_ejemplo_component_counter")
     */
    public function componentCounter()
    {
        return $this->render('admin/ejemplos/component_counter.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-lightbox", name="admin_ejemplo_component_lightbox")
     */
    public function componentLightbox()
    {
        return $this->render('admin/ejemplos/component_lightbox.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-list-group", name="admin_ejemplo_component_list_group")
     */
    public function componentListGroup()
    {
        return $this->render('admin/ejemplos/component_list_group.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-media-object", name="admin_ejemplo_component_media_object")
     */
    public function componentMediaObject()
    {
        return $this->render('admin/ejemplos/component_media_object.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-modal", name="admin_ejemplo_component_modal")
     */
    public function componentModal()
    {
        return $this->render('admin/ejemplos/component_modal.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-pricing-table", name="admin_ejemplo_component_pricing_table")
     */
    public function componentPricingTable()
    {
        return $this->render('admin/ejemplos/component_pricing_table.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-session-timeout", name="admin_ejemplo_component_session_timeout")
     */
    public function componentSessionTimeout()
    {
        return $this->render('admin/ejemplos/component_session_timeout.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-snackbar", name="admin_ejemplo_component_snackbar")
     */
    public function componentSnackbar()
    {
        return $this->render('admin/ejemplos/component_snackbar.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-sweetalert", name="admin_ejemplo_component_sweetalert")
     */
    public function componentSweetalert()
    {
        return $this->render('admin/ejemplos/component_sweetalert.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-tabs", name="admin_ejemplo_component_tabs")
     */
    public function componentTabs()
    {
        return $this->render('admin/ejemplos/component_tabs.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/component-timeline", name="admin_ejemplo_component_timeline")
     */
    public function componentTimeline()
    {
        return $this->render('admin/ejemplos/component_timeline.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/dragndrop-dragula", name="admin_ejemplo_dragndrop_dragula")
     */
    public function dragndropDragula()
    {
        return $this->render('admin/ejemplos/dragndrop_dragula.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-alerts", name="admin_ejemplo_element_alerts")
     */
    public function elementAlerts()
    {
        return $this->render('admin/ejemplos/element_alerts.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-avatar", name="admin_ejemplo_element_avatar")
     */
    public function elementAvatar()
    {
        return $this->render('admin/ejemplos/element_avatar.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-badges", name="admin_ejemplo_element_badges")
     */
    public function elementBadges()
    {
        return $this->render('admin/ejemplos/element_badges.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-breadcrumbs", name="admin_ejemplo_element_breadcrumbs")
     */
    public function elementBreadcrumbs()
    {
        return $this->render('admin/ejemplos/element_breadcrumbs.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-buttons", name="admin_ejemplo_element_buttons")
     */
    public function elementButtons()
    {
        return $this->render('admin/ejemplos/element_buttons.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-buttons-group", name="admin_ejemplo_element_buttons_group")
     */
    public function elementButtonsGroup()
    {
        return $this->render('admin/ejemplos/element_buttons_group.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-color-library", name="admin_ejemplo_element_color_library")
     */
    public function elementColorLibrary()
    {
        return $this->render('admin/ejemplos/element_color_library.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-dropdown", name="admin_ejemplo_element_dropdown")
     */
    public function elementDropdown()
    {
        return $this->render('admin/ejemplos/element_dropdown.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-infobox", name="admin_ejemplo_element_infobox")
     */
    public function elementInfobox()
    {
        return $this->render('admin/ejemplos/element_infobox.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-jumbotron", name="admin_ejemplo_element_jumbotron")
     */
    public function elementJumbotron()
    {
        return $this->render('admin/ejemplos/element_jumbotron.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-loader", name="admin_ejemplo_element_loader")
     */
    public function elementLoader()
    {
        return $this->render('admin/ejemplos/element_loader.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-pagination", name="admin_ejemplo_element_pagination")
     */
    public function elementPagination()
    {
        return $this->render('admin/ejemplos/element_pagination.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-popovers", name="admin_ejemplo_element_popovers")
     */
    public function elementPopovers()
    {
        return $this->render('admin/ejemplos/element_popovers.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-progress_bar", name="admin_ejemplo_element_progress_bar")
     */
    public function elementProgressBar()
    {
        return $this->render('admin/ejemplos/element_progress_bar.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element_search", name="admin_ejemplo_element_search")
     */
    public function elementSearch()
    {
        return $this->render('admin/ejemplos/element_search.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-tooltips", name="admin_ejemplo_element_tooltips")
     */
    public function elementTooltips()
    {
        return $this->render('admin/ejemplos/element_tooltips.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element_treeview", name="admin_ejemplo_element_treeview")
     */
    public function elementTreeview()
    {
        return $this->render('admin/ejemplos/element_treeview.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/element-typography", name="admin_ejemplo_element_typography")
     */
    public function elementTypography()
    {
        return $this->render('admin/ejemplos/element_typography.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/fonticons", name="admin_ejemplo_element_fonticons")
     */
    public function fonticons()
    {
        return $this->render('admin/ejemplos/fonticons.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-bootstrap-basic", name="admin_ejemplo_form_bootstrap_basic")
     */
    public function formBootstrapBasic()
    {
        return $this->render('admin/ejemplos/form_bootstrap_basic.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-bootstrap-select", name="admin_ejemplo_form_bootstrap_select")
     */
    public function formBootrstrapSelect()
    {
        return $this->render('admin/ejemplos/form_bootstrap_select.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-bootstrap-touchspin", name="admin_ejemplo_form_bootrstrap_touchspin")
     */
    public function formBootstrapTouchspin()
    {
        return $this->render('admin/ejemplos/form_bootstrap_touchspin.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-checkbox-radio", name="admin_ejemplo_form_checkbox_radio")
     */
    public function formCheckboxRadio()
    {
        return $this->render('admin/ejemplos/form_checkbox_radio.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-clipboard", name="admin_ejemplo_form_clipboard")
     */
    public function formClipboard()
    {
        return $this->render('admin/ejemplos/form_clipboard.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-date-range-picker", name="admin_ejemplo_form_date_range_picker")
     */
    public function formDateRangePicker()
    {
        return $this->render('admin/ejemplos/form_date_range_picker.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-fileupload", name="admin_ejemplo_form_fileupload")
     */
    public function formFileupload()
    {
        return $this->render('admin/ejemplos/form_fileupload.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-input-group-basic", name="admin_ejemplo_form_input_group_basic")
     */
    public function formInputGroupBasic()
    {
        return $this->render('admin/ejemplos/form_input_group_basic.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-input-mask", name="admin_ejemplo_form_input_mask")
     */
    public function formInutMask()
    {
        return $this->render('admin/ejemplos/form_input_mask.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-layouts", name="admin_ejemplo_form_layouts")
     */
    public function formLayouts()
    {
        return $this->render('admin/ejemplos/form_layouts.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-markdown", name="admin_ejemplo_form_markdown")
     */
    public function formMarkdown()
    {
        return $this->render('admin/ejemplos/form_markdown.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-maxlength", name="admin_ejemplo_form_maxlength")
     */
    public function formMaxlength()
    {
        return $this->render('admin/ejemplos/form_maxlength.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-quill", name="admin_ejemplo_form_quill")
     */
    public function formQuill()
    {
        return $this->render('admin/ejemplos/form_quill.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-select2", name="admin_ejemplo_form_select2")
     */
    public function formSelect2()
    {
        return $this->render('admin/ejemplos/form_select2.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-switches", name="admin_ejemplo_form_swhitches")
     */
    public function formSwhitches()
    {
        return $this->render('admin/ejemplos/form_switches.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-typeahead", name="admin_ejemplo_form_typeahead")
     */
    public function formTypeahead()
    {
        return $this->render('admin/ejemplos/form_typeahead.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-validation", name="admin_ejemplo_form_validation")
     */
    public function formValidation()
    {
        return $this->render('admin/ejemplos/form_validation.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/form-wizard", name="admin_ejemplo_form_wizard")
     */
    public function formWizard()
    {
        return $this->render('admin/ejemplos/form_wizard.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/map-jvector", name="admin_ejemplo_map_jvector")
     */
    public function mapJvector()
    {
        return $this->render('admin/ejemplos/map_jvector.html.twig');
    }

    /**
 * @return \Symfony\Component\HttpFoundation\Response
 * @Route("/admin/ejemplo/pages-comming_soon", name="admin_ejemplo_pages_comming_soon")
 */
    public function pagesCommingSoon()
    {
        return $this->render('admin/ejemplos/pages_coming_soon.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-contact-us", name="admin_ejemplo_pages_contact_us")
     */
    public function pagesContactUs()
    {
        return $this->render('admin/ejemplos/pages_contact_us.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-error404", name="admin_ejemplo_pages_error404")
     */
    public function pagesError404()
    {
        return $this->render('admin/ejemplos/pages_error404.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-error500", name="admin_ejemplo_pages_error500")
     */
    public function pagesError500()
    {
        return $this->render('admin/ejemplos/pages_error500.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-error503", name="admin_ejemplo_pages_error503")
     */
    public function pagesError503()
    {
        return $this->render('admin/ejemplos/pages_error503.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-faq", name="admin_ejemplo_pages_faq")
     */
    public function pagesFaq()
    {
        return $this->render('admin/ejemplos/pages_faq.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-faq2", name="admin_ejemplo_pages_faq2")
     */
    public function pagesFaq2()
    {
        return $this->render('admin/ejemplos/pages_faq2.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-helpdesk", name="admin_ejemplo_pages_helpdesk")
     */
    public function pagesHelpdesk()
    {
        return $this->render('admin/ejemplos/pages_helpdesk.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-maintenence", name="admin_ejemplo_pages_maintenence")
     */
    public function pagesMaintenence()
    {
        return $this->render('admin/ejemplos/pages_maintenence.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/pages-privacy", name="admin_ejemplo_pages_privacy")
     */
    public function pagesPrivacy()
    {
        return $this->render('admin/ejemplos/pages_privacy.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/starter-kit-menu", name="admin_ejemplo_pages_starter_kit_menu")
     */
    public function starterKitMenu()
    {
        return $this->render('admin/ejemplos/starter_kit_alt_menu.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/starter-kit-blank-page", name="admin_ejemplo_pages_starter_kit_blank_page")
     */
    public function starterKitBlankPage()
    {
        return $this->render('admin/ejemplos/starter_kit_blank_page.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/starter-kit-boxed", name="admin_ejemplo_pages_starter_kit_boxed")
     */
    public function starterKitBoxed()
    {
        return $this->render('admin/ejemplos/starter_kit_boxed.html.twig');
    }

    /**
     * @Route("/admin/ejemplo/starter-kit-breadcrumbs", name="admin_ejemplo_pages_starter_kit_breadcrumbs")
     */
    public function starterKitBreadcrumbs()
    {
        return $this->render('admin/ejemplos/starter_kit_breadcrumbs.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-basic", name="admin_ejemplo_table_basic")
     */
    public function tableBasic()
    {
        return $this->render('admin/ejemplos/table_basic.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-alternative-pagination", name="admin_ejemplo_table_dt_alternative_pagination")
     */
    public function tableDtAlternativePagination()
    {
        return $this->render('admin/ejemplos/table_dt_alternative_pagination.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-basic", name="admin_ejemplo_table_dt_basic")
     */
    public function tableDtBasic()
    {
        return $this->render('admin/ejemplos/table_dt_basic.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-basic-light", name="admin_ejemplo_table_dt_basic_light")
     */
    public function tableDtBasicLight()
    {
        return $this->render('admin/ejemplos/table_dt_basic-light.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-custom", name="admin_ejemplo_table_dt_custom")
     */
    public function tableDtCustom()
    {
        return $this->render('admin/ejemplos/table_dt_custom.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-html5", name="admin_ejemplo_table_dt_html5")
     */
    public function tableDtHtml5()
    {
        return $this->render('admin/ejemplos/table_dt_html5.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-live-dom-ordering", name="admin_ejemplo_table_dt_live_dom_ordering")
     */
    public function tableDtLiveDomOrdering()
    {
        return $this->render('admin/ejemplos/table_dt_live_dom_ordering.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-miscellaneous", name="admin_ejemplo_table_dt_miscellaneous")
     */
    public function tableDtMiscellaneous()
    {
        return $this->render('admin/ejemplos/table_dt_miscellaneous.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-multi-column-ordering", name="admin_ejemplo_table_dt_multi_column_ordering")
     */
    public function tableDtMultiColumnOrdering()
    {
        return $this->render('admin/ejemplos/table_dt_multi-column_ordering.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-multiple-tables", name="admin_ejemplo_table_dt_multiple_tables")
     */
    public function tableDtMultipleTables()
    {
        return $this->render('admin/ejemplos/table_dt_multiple_tables.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-ordering-sorting", name="admin_ejemplo_table_dt_ordering_sorting")
     */
    public function tableDtOrderingSorting()
    {
        return $this->render('admin/ejemplos/table_dt_ordering_sorting.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/table-dt-range-search", name="admin_ejemplo_table_dt_range_search")
     */
    public function tableDtRangeSearch()
    {
        return $this->render('admin/ejemplos/table_dt_range_search.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/user-account-setting", name="admin_ejemplo_user_account_setting")
     */
    public function userAccountSetting()
    {
        return $this->render('admin/ejemplos/user_account_setting.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/user-profile", name="admin_ejemplo_user_profile")
     */
    public function userProfile()
    {
        return $this->render('admin/ejemplos/user_profile.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/ejemplo/widgets", name="admin_ejemplo_widgets")
     */
    public function widgets()
    {
        return $this->render('admin/ejemplos/widgets.html.twig');
    }
}
