<?php

class RST_Breadcrumbs
{

  /** @var array - settings */
  protected $settings = array();

  /** @var array - labels for page types */
  protected $labels = array();

  /** @var array - wrappers for elements in breadcrumbs */
  protected $wrappers = array();

  /** @var string - type of current page */
  protected $current_page_type = '';


  /**
   * RST_Breadcrumbs constructor.
   *
   * @param null|string $textdomain - if you want use your textdomain to translate labels
   * @param null|array $settings - settings array
   * @param null|array $labels - labels array
   * @param null|array $wrappers - wrappers array
   */
  public function __construct( $textdomain = null, $settings = null, $labels = null, $wrappers = null )
  {

    $domain = $textdomain !== null ? $textdomain : 'default';

    // Settings:
    $this->settings['print_home_link']  = isset($settings['print_home_link']) ? $settings['print_home_link']  : 1;
    $this->settings['display_at_home']  = isset($settings['display_at_home']) ? $settings['display_at_home']  : 1;
    $this->settings['print_current']    = isset($settings['print_current'])   ? $settings['print_current']    : 1;

    // Set up labels for breadcrumbs:
    $this->labels['home']     = isset($labels['home'])    ? $labels['home']   : __('Homepage', $domain);
    $this->labels['category'] = '%s';
    $this->labels['search']   = isset($labels['search'])  ? $labels['search'] : __('Search results for «%s»', $domain);
    $this->labels['tag']      = isset($labels['tag'])     ? $labels['tag']    : __('Posts tagged with  «%s»', $domain);
    $this->labels['author']   = isset($labels['author'])  ? $labels['author'] : __('Posted by %s', $domain);
    $this->labels['404']      = isset($labels['404'])     ? $labels['404']    : __('Error 404', $domain);
    $this->labels['page']     = isset($labels['page'])    ? $labels['page']   : __('Page %s', $domain);
    $this->labels['cpage']    = isset($labels['comm'])    ? $labels['comm']   : __('Comments page %s', $domain);

    // Set up wrappers for elements
    $this->wrappers['container_before'] = '<div class="breadcrumbs">';
    $this->wrappers['container_after']  = '</div>';
    $this->wrappers['separator_before'] = '<span class="sep">';
    $this->wrappers['separator_after']  = '</span>';
    $this->wrappers['separator_char']   = '/';
    $this->wrappers['link_before']      = '<a href="%s">';
    $this->wrappers['link_after']       = '</a>';
    $this->wrappers['current_before']   = '<span class="current">';
    $this->wrappers['current_after']    = '</span>';

    // Detect type of current page:
    $this->detect_current_type();
    $this->create_breadcrumbs();

  }



  /**
   * It will detect type of current page
   *
   * @return bool|string
   */
  public function detect_current_type()
  {

    global $post;

    # Detect homepage:
    if (is_home() || is_front_page()) {
      $this->current_page_type = 'home';
      return 'home';
    }

    # Detect category:
    if (is_category()) {
      $this->current_page_type = 'category';
      return 'category';
    }

    # Detect archive:
    if (is_archive()) {
      $this->current_page_type = 'archive';
      return 'archive';
    }

    # Detect single:
    if (is_single() && !is_attachment()) {
      $this->current_page_type = 'single';
      return 'single';
    }

    # Detect attachment:
    if (is_single() && is_attachment()) {
      $this->current_page_type = 'attachment';
      return 'attachment';
    }

    # Detect page:
    if (is_page()) {
      $this->current_page_type = 'page';
      return 'page';
    }

    # Detect search:
    if (is_search()) {
      $this->current_page_type = 'search';
      return 'search';
    }

    # Detect tag:
    if (is_tag()) {
      $this->current_page_type = 'tag';
      return 'tag';
    }

    # Detect author:
    if (is_author()) {
      $this->current_page_type = 'author';
      return 'author';
    }

    return false;

  }



  public function create_breadcrumbs()
  {

    # Open breadcrumbs conrainer:
    $out = $this->wrappers['container_before'];

    # Create home link, if setting is turned on:
    if( $this->settings['print_home_link'] == 1 ):
    $out.= sprintf( $this->wrappers['link_before'], '/' );
    $out.= $this->wrappers['link_after'];
    endif;

    # Close breadcrumbs container:
    $out.= $this->wrappers['container_after'];

    return $out;

  }

}