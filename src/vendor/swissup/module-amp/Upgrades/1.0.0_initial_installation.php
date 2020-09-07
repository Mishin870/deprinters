<?php
namespace Swissup\Amp\Upgrades;

class InitialInstallation extends \Swissup\Core\Model\Module\Upgrade
{
    public function getCommands()
    {
        return [
            'Configuration' => $this->getConfiguration(),
            'CmsBlock'      => $this->getCmsBlocks(),
            'CmsPage'       => $this->getCmsPages(),
            'Easyslide'     => $this->getEasyslide()
        ];
    }

    public function getConfiguration()
    {
        return [
            'swissup_amp/general/enabled' => 1
        ];
    }

    public function getCmsBlocks()
    {
        return [
            'swissupamp_footer' => [
                'title' => 'swissupamp_footer',
                'identifier' => 'swissupamp_footer',
                'is_active' => 1,
                'content' => <<<HTML
<div class="links">
    <a href="{{store direct_url='about'}}">About</a>
    <a href="{{store direct_url='user-agreement'}}">User Agreement</a>
    <a href="{{store direct_url='privacy'}}">Privacy</a>
    <a href="{{store direct_url='cookies'}}">Cookies</a>
</div>
HTML
            ]
        ];
    }

    public function getCmsPages()
    {
        return [
            'swissupamp_homepage' => [
                'title' => 'Homepage',
                'identifier' => 'swissupamp_homepage',
                'page_layout' => '1column',
                'content_heading' => '',
                'is_active' => 1,
                'layout_update_xml' => '',
                'custom_theme' => null,
                'custom_root_template' => null,
                'custom_layout_update_xml' => null,
                'content' => <<<HTML
{{widget type="Swissup\EasySlide\Block\Slider" identifier="swissupamp"}}
{{widget type="Swissup\Easycatalogimg\Block\Widget\SubcategoriesList" category_count="6" subcategory_count="4" column_count="4" show_image="1" image_width="300" image_height="300" template="Swissup_Easycatalogimg::list.phtml" hide_when_filter_is_used="0"}}
HTML
            ],
            'swissupamp_typography' => [
                'title' => 'Typography',
                'identifier' => 'swissupamp-typography',
                'page_layout' => '1column',
                'content_heading' => '',
                'is_active' => 1,
                'layout_update_xml' => '',
                'custom_theme' => null,
                'custom_root_template' => null,
                'custom_layout_update_xml' => null,
                'content' => <<<HTML
<h1 id="top">CSS Basic Elements</h1>

{{widget type="Swissup\EasySlide\Block\Slider" identifier="swissupamp"}}

<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

<hr />

<h1 id="headings">Headings</h1>

<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>

<small><a href="#top">[top]</a></small>
<hr />


<h1 id="paragraph">Paragraph</h1>

<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

<small><a href="#top">[top]</a></small>
<hr />

<h1 id="list_types">List Types</h1>

<h3>Definition List</h3>
<dl>
    <dt>Definition List Title</dt>
    <dd>This is a definition list division.</dd>
</dl>

<h3>Ordered List</h3>
<ol>
    <li>List Item 1</li>
    <li>List Item 2</li>
    <li>List Item 3</li>
    <li>List Item 3
        <ul>
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3</li>
        </ul>
    </li>
</ol>

<h3>Unordered List</h3>
<ul>
    <li>List Item 1</li>
    <li>List Item 2</li>
    <li>List Item 3</li>
</ul>

<small><a href="#top">[top]</a></small>
<hr />

<h1 id="tables">Tables</h1>

<table cellspacing="0" cellpadding="0">
    <tr>
        <th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
    </tr>
    <tr>
        <td>Division 1</td><td>Division 2</td><td>Division 3</td>
    </tr>
    <tr>
        <td>Division 1</td><td>Division 2</td><td>Division 3</td>
    </tr>
    <tr>
        <td>Division 1</td><td>Division 2</td><td>Division 3</td>
    </tr>
</table>

<small><a href="#top">[top]</a></small>
<hr />

<h1 id="misc">Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>

<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>

<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>


<pre><code>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></code></pre>

<code>Hello world</code>

<blockquote>
    "This stylesheet is going to help so freaking much." <br />-Blockquote
</blockquote>

<small><a href="#top">[top]</a></small>
HTML
            ]
        ];
    }

    public function getEasyslide()
    {
        return [
            [
                'identifier' => 'swissupamp',
                'title'      => 'Swissup AMP',
                'speed' => 500,
                'pagination' => '0',
                'navigation' => '0',
                'scrollbar' => '0',
                'autoplay' => 4000,
                'effect' => 'slide',
                'theme' => '',
                'lazy' => '0',
                'sizes' => [
                    'sizes' => [
                        [
                            'media_query' => '(max-width: 480px)',
                            'image_width' => '480'
                        ],
                        [
                            'media_query' => '(max-width: 768px)',
                            'image_width' => '768'
                        ]
                    ]
                ],
                'is_active' => 1,
                'slides' => [
                    [
                        'image' => 'swissup/amp/default_slider1.jpg',
                        'title' => '',
                        'link' => '',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'desc_position' => 'top',
                        'desc_background' => 'dark',
                        'sort_order' => 10
                    ],
                    [
                        'image' => 'swissup/amp/default_slider2.jpg',
                        'title' => '',
                        'link' => '',
                        'description' => 'Sale 20% off',
                        'desc_position' => 'top',
                        'desc_background' => 'dark',
                        'sort_order' => 20
                    ],
                    [
                        'image' => 'swissup/amp/default_slider3.jpg',
                        'title' => '',
                        'link' => '',
                        'description' => 'Free shipping',
                        'desc_position' => 'bottom',
                        'desc_background' => 'dark',
                        'sort_order' => 30
                    ]
                ]
            ]
        ];
    }
}
