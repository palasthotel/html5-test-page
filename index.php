<!doctype html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes" />
<title>HTML5 Test Page</title>
<?php if (filter_var($_GET['external-stylesheet-url'], FILTER_VALIDATE_URL) !== false) : ?>
  <link href="<?php echo $_GET['external-stylesheet-url']; ?>" rel="stylesheet" />
<?php endif; ?>
</head>
<body>

<header role="banner">
  <h1><a href="/">HTML5 Test Page</a></h1>
  <p>This is a test page filled with common HTML elements to be used to provide visual feedback whilst building CSS systems and frameworks.</p>
  <p>Examples:
    <a href="/?external-stylesheet-url=https%3A%2F%2Fmaxcdn.bootstrapcdn.com%2Fbootstrap%2F4.0.0%2Fcss%2Fbootstrap.min.css">Bootstrap v4.0.0</a>,
    <a href="/?external-stylesheet-url=https%3A%2F%2Fcdn.jsdelivr.net%2Ffoundation%2F6.2.4%2Ffoundation.min.css">Foundation v6.2.4</a>,
    <a href="/?external-stylesheet-url=https%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Fuikit%2F3.0.0-beta.40%2Fcss%2Fuikit.min.css">UIkit v3.0.0-beta.40</a>,
    <a href="/?external-stylesheet-url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2Fnormalize.css%408.0.0%2Fnormalize.css">normalize.css v8.0.0</a>,
    <a href="/">native browser styles</a></p>
</header>

<aside>
  <form action="/" method="get">
    <fieldset>
      <legend>You can apply your external stylesheet here</legend>
      <label for="external-stylesheet-url">Stylesheet URL</label>
      <input id="external-stylesheet-url" type="text" name="external-stylesheet-url" size="50" placeholder="https://example.com/stylesheet.css" value="<?php echo $_GET['external-stylesheet-url']; ?>">
      <button type="submit">Apply external stylesheet</button>
    </fieldset>
  </form>
</aside>

<hr>

<nav role="navigation">
  <h2>Table of Contents</h2>
  <ul>
    <li>
      <a href="#text">Text</a>
      <ul>
        <li><a href="#text__headings">Headings</a></li>
        <li><a href="#text__paragraphs-blockquotes">Paragraphs and Blockquote</a></li>
        <li><a href="#text__lists">Lists</a></li>
        <li><a href="#text__hr">Horizontal rules</a></li>
        <li><a href="#text__tables">Tabular data</a></li>
        <li><a href="#text__chars">Character test</a></li>
        <li><a href="#text__code">Code</a></li>
        <li><a href="#text__inline">Inline elements</a></li>
      </ul>
    </li>
    <li>
      <a href="#embedded">Embedded content</a>
      <ul>
        <li><a href="#embedded__images">Images</a></li>
        <li><a href="#embedded__audio">Audio</a></li>
        <li><a href="#embedded__video">Video</a></li>
        <li><a href="#embedded__canvas">Canvas</a></li>
        <li><a href="#embedded__meter">Meter</a></li>
        <li><a href="#embedded__progress">Progress</a></li>
        <li><a href="#embedded__svg">Inline SVG</a></li>
        <li><a href="#embedded__iframe">IFrames</a></li>
      </ul>
    </li>
    <li>
      <a href="#forms">Form elements</a>
      <ul>
        <li><a href="#forms__input">Input fields</a></li>
        <li><a href="#forms__select">Select menus</a></li>
        <li><a href="#forms__checkbox">Checkboxes</a></li>
        <li><a href="#forms__radio">Radio buttons</a></li>
        <li><a href="#forms__textareas">Textareas</a></li>
        <li><a href="#forms__html5">HTML5 inputs</a></li>
        <li><a href="#forms__action">Action buttons</a></li>
      </ul>
    </li>
  </ul>
</nav>
<main role="main">
  <section id="text">
    <header>
      <h1>Text</h1>
    </header>
    <article id="text__headings">
      <header>
        <h1>Headings</h1>
      </header>
      <div>
        <h1>Heading 1</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        <h2>Heading 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        <h3>Heading 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        <h4>Heading 4</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        <h5>Heading 5</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        <h6>Heading 6</h6>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="text__paragraphs-blockquotes">
      <header>
        <h1>Paragraphs and Blockquote</h1>
      </header>
      <div>
        <p>A paragraph (from the Greek paragraphos, “to write beside” or “written beside”) is a self-contained unit of a discourse in writing dealing with a <em>particular point or idea</em>. A paragraph consists of one or more sentences. It may also include <strong>important passages</strong>. Sometimes there is even the need for <a href="https://example.com">external linking</a>. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
        <blockquote>
          <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text.</p>
          <p>It is typically distinguished visually using indentation and a different typeface or smaller size quotation. It may or may not include a citation, usually placed at the bottom.</p>
          <cite><a href="#!">Said no one, ever.</a></cite>
        </blockquote>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
        <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="text__lists">
      <header>
        <h1>Lists</h1>
      </header>
      <h2>Unordered list</h2>
      <div>
        <p>This is a paragraph before an unordered list (ul). Note that the spacing between a paragraph and a list before or after that is hard to tune in a user style sheet. You can't guess which paragraphs are logically related to a list, e.g. as a "list header".</p>
        <ul>
          <li>One.
          </li>
          <li>Two.
            <ul>
              <li>Nested list item</li>
              <li>Nested list item</li>
              <li>Nested list item</li>
            </ul>
          </li>
          <li>Three. Well, probably this list item should be longer. Note that for short items lists look better if they are compactly presented, whereas for long items, it would be better to have more vertical spacing between items.
          </li>
          <li>Four. This is the last item in this list. Let us terminate the list now without making any more fuss about it.
          </li>
        </ul>
        <h2>Ordered list</h2>
        <p>This is a paragraph before an <strong>ordered</strong> list (<code>ol</code>). Note that the spacing between a paragraph and a list before or after that is hard to tune in a user style sheet. You can't guess which paragraphs are logically related to a list, e.g. as a "list header".</p>
        <ol>
          <li>One.
          </li>
          <li>Two.
            <ol>
              <li>Nested List Item</li>
              <li>Nested List Item</li>
              <li>Nested List Item</li>
            </ol>
          </li>
          <li>Three. Well, probably this list item should be longer. Note that if items are short, lists look better if they are compactly presented, whereas for long items, it would be better to have more vertical spacing between items.
          </li>
          <li>Four. This is the last item in this list. Let us terminate the list now without making any more fuss about it.
          </li>
        </ol>
        <h2>menu list</h2>
        <p>The following is a <code>menu</code> list:</p>
        <menu>
          <li>One.
          </li>
          <li>Two.
          </li>
          <li>Three. Well, probably this list item should be longer so that it will probably wrap to the next line in rendering.
          </li>
        </menu>
        <h2>dir list</h2>
        <p>The following is a <code>dir</code> list:</p>
        <dir>
          <li>One.
          </li>
          <li>Two.
          </li>
          <li>Three. Well, probably this list item should be longer so that it will probably wrap to the next line in rendering.
          </li>
        </dir>
        <h2>Mixed lists</h2>
        <p><strong>Mixed lists</strong> and heavy nesting.</p>
        <ul>
          <li>List item with a much longer description or more content.</li>
          <li>List item</li>
          <li>List item
            <ol>
              <li>Nested list item</li>
              <li>Nested list item</li>
              <li>Nested list item</li>
            </ol>
          </li>
          <li>List item</li>
          <li>List item</li>
          <li>List item</li>
        </ul>
        <ol>
          <li>List item with a much longer description or more content.</li>
          <li>List item</li>
          <li>List item
            <ul>
              <li>Nested List Item</li>
              <li>Nested List Item</li>
              <li>Nested List Item
                <ol>
                  <li>Nested List Item</li>
                  <li>Nested List Item</li>
                  <li>Nested List Item
                    <ol>
                      <li>Nested List Item</li>
                      <li>Nested List Item</li>
                      <li>Nested List Item
                        <ul>
                          <li>Nested list item</li>
                          <li>Nested list item</li>
                          <li>Nested list item</li>
                        </ul>
                      </li>
                    </ol>
                  </li>
                </ol>
              </li>
              <li>Nested List Item</li>
              <li>Nested List Item</li>
            </ul>
          </li>
          <li>List item</li>
          <li>List item</li>
          <li>List item</li>
        </ol>
        <h2>Definition list</h2>
        <p>This is a paragraph before a <strong>definition</strong> list (<code>dl</code>). In principle, such a list should consist of <em>terms</em> and associated definitions. But many authors use <code>dl</code> elements for fancy "layout" things. Usually the effect is not <em>too</em> bad, if you design user style sheet rules for <code>dl</code> which are suitable for real definition lists.
        </p>
        <dl>
          <dt>recursion
          </dt>
          <dd>see recursion
          </dd><dt>recursion, indirect
          </dt>
          <dd>see indirect recursion
          </dd><dt>indirect recursion
          </dt>
          <dd>see recursion, indirect
          </dd><dt>term
          </dt>
          <dd>a word or other expression taken into specific use in a well-defined meaning, which is often defined rather rigorously, even formally, and may differ quite a lot from an everyday meaning
          </dd>
        </dl>
        <h2>Details and summary</h2>
        <details>
          <summary>Question 1</summary>
          <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#!">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
          <details>
            <summary>Related documents</summary>
            <ul>
              <li><a href="#!">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
              <li><a href="#!">Aliquam tincidunt mauris eu risus.</a></li>
              <li><a href="#!">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
              <li><a href="#!">Aliquam tincidunt mauris eu risus.</a></li>
            </ul>
          </details>
        </details>
        <details>
          <summary>Question 2</summary>
          <p>Duis consequat metus et eros rutrum, interdum facilisis urna interdum. Etiam facilisis diam in libero varius ultricies id id est. Sed lacinia pellentesque sem vel sagittis.</p>
        </details>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="text__hr">
      <header>
        <h1>Horizontal rules</h1>
      </header>
      <div>
        <hr>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="text__tables">
      <header>
        <h1>Tabular data</h1>
      </header>
      <table>
        <caption>Table Caption</caption>
        <thead>
        <tr>
          <th>Table Heading 1</th>
          <th>Table Heading 2</th>
          <th>Table Heading 3</th>
          <th>Table Heading 4</th>
          <th>Table Heading 5</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
          <th>Table Footer 1</th>
          <th>Table Footer 2</th>
          <th>Table Footer 3</th>
          <th>Table Footer 4</th>
          <th>Table Footer 5</th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
          <td>Table Cell 1</td>
          <td>Table Cell 2</td>
          <td>Table Cell 3</td>
          <td>Table Cell 4</td>
          <td>Table Cell 5</td>
        </tr>
        <tr>
          <td>Table Cell 1</td>
          <td>Table Cell 2</td>
          <td>Table Cell 3</td>
          <td>Table Cell 4</td>
          <td>Table Cell 5</td>
        </tr>
        <tr>
          <td>Table Cell 1</td>
          <td>Table Cell 2</td>
          <td>Table Cell 3</td>
          <td>Table Cell 4</td>
          <td>Table Cell 5</td>
        </tr>
        <tr>
          <td>Table Cell 1</td>
          <td>Table Cell 2</td>
          <td>Table Cell 3</td>
          <td>Table Cell 4</td>
          <td>Table Cell 5</td>
        </tr>
        </tbody>
      </table>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="text__chars">
      <header>
        <h1>Character test</h1>
      </header>
      <div>
        <p>The following table has some sample characters with annotations. If the browser’s default font does not contain all of them, they may get displayed using backup fonts. This may cause stylistic differences, but it should not prevent the characters from being displayed at all.</p>
        <table>
          <tbody>
          <tr>
            <th>Char. </th>
            <th>Explanation </th>
            <th>Notes
            </th>
          </tr>
          <tr>
            <td>ê </td>
            <td>e with circumflex </td>
            <td>Latin 1 character, should be ok
            </td>
          </tr>
          <tr>
            <td>— </td>
            <td>em dash </td>
            <td>Windows Latin 1 character, should be ok, too
            </td>
          </tr>
          <tr>
            <td>Ā </td>
            <td>A with macron (line above) </td>
            <td>Latin Extended-A character, not present in all fonts
            </td>
          </tr>
          <tr>
            <td>Ω </td>
            <td>capital omega </td>
            <td>A Greek letter
            </td>
          </tr>
          <tr>
            <td>− </td>
            <td>minus sign </td>
            <td>Unicode minus
            </td>
          </tr>
          <tr>
            <td>⌀ </td>
            <td>diameter sign </td>
            <td>relatively rare in fonts
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="text__code">
      <header>
        <h1>Code</h1>
      </header>
      <div>
        <p><strong>Keyboard input:</strong> <kbd>Cmd</kbd></p>
        <p><strong>Inline code:</strong> <code>&lt;div&gt;code&lt;/div&gt;</code></p>
        <p><strong>Sample output:</strong> <samp>This is sample output from a computer program.</samp></p>
        <h2>Pre-formatted text</h2>
        <pre>P R E F O R M A T T E D T E X T
! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~ </pre>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="text__inline">
      <header>
        <h1>Inline elements</h1>
      </header>
      <div>
        <p><a href="#!">This is a text link</a>.</p>
        <p><strong>Strong is used to indicate strong importance.</strong></p>
        <p><em>This text has added emphasis.</em></p>
        <p>The <b>b element</b> is stylistically different text from normal text, without any special importance.</p>
        <p>The <i>i element</i> is text that is offset from the normal text.</p>
        <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation.</p>
        <p><del>This text is deleted</del> and <ins>This text is inserted</ins>.</p>
        <p><s>This text has a strikethrough</s>.</p>
        <p>Superscript<sup>®</sup>.</p>
        <p>Subscript for things like H<sub>2</sub>O.</p>
        <p><small>This small text is small for for fine print, etc.</small></p>
        <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>
        <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation.</q></p>
        <p><cite>This is a citation.</cite></p>
        <p>The <dfn>dfn element</dfn> indicates a definition.</p>
        <p>The <mark>mark element</mark> indicates a highlight.</p>
        <p>The <var>variable element</var>, such as <var>x</var> = <var>y</var>.</p>
        <p>The time element: <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time></p>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
  </section>

  <section id="embedded">
    <header>
      <h1>Embedded content</h1>
    </header>
    <article id="embedded__images">
      <header>
        <h2>Images</h2>
      </header>
      <div>
        <h3>No <code>&lt;figure&gt;</code> element</h3>
        <p><img src="https://placekitten.com/420/420" alt="Image alt text"></p>
        <h3>Wrapped in a <code>&lt;figure&gt;</code> element, no <code>&lt;figcaption&gt;</code></h3>
        <figure><img src="https://placekitten.com/420/420" alt="Image alt text"></figure>
        <h3>Wrapped in a <code>&lt;figure&gt;</code> element, with a <code>&lt;figcaption&gt;</code></h3>
        <figure>
          <img src="https://placekitten.com/420/420" alt="Image alt text">
          <figcaption>Here is a caption for this image.</figcaption>
        </figure>
      </div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="embedded__audio">
      <header>
        <h2>Audio</h2>
      </header>
      <div><audio controls="">audio</audio></div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="embedded__video">
      <header>
        <h2>Video</h2>
      </header>
      <div><video controls="">video</video></div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="embedded__canvas">
      <header>
        <h2>Canvas</h2>
      </header>
      <div><canvas>canvas</canvas></div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="embedded__meter">
      <header>
        <h2>Meter</h2>
      </header>
      <div><meter value="2" min="0" max="10">2 out of 10</meter></div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="embedded__progress">
      <header>
        <h2>Progress</h2>
      </header>
      <div><progress>progress</progress></div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="embedded__svg">
      <header>
        <h2>Inline SVG</h2>
      </header>
      <div><svg width="100px" height="100px"><circle cx="100" cy="100" r="100" fill="#1fa3ec"></circle></svg></div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
    <article id="embedded__iframe">
      <header>
        <h2>IFrame</h2>
      </header>
      <div><iframe src="https://palasthotel.de" height="300"></iframe></div>
      <footer>
        <p><a href="#top">[Top]</a></p>
      </footer>
    </article>
  </section>
  <section id="forms">
    <header>
      <h1>Form elements</h1>
    </header>
    <form>
      <fieldset id="forms__input">
        <legend>Input fields</legend>
        <p>
          <label for="input__text">Text Input</label>
          <input id="input__text" type="text" placeholder="Text Input">
        </p>
        <p>
          <label for="input__text-readonly">Text readonly</label>
          <input id="input__text-readonly" type="text" readonly placeholder="I am readonly">
        </p>
        <p>
          <label for="input__password">Password</label>
          <input id="input__password" type="password" placeholder="Type your Password">
        </p>
        <p>
          <label for="input__webaddress">Web Address/URL</label>
          <input id="input__webaddress" type="url" placeholder="http://yoursite.com">
        </p>
        <p>
          <label for="input__emailaddress">Email Address</label>
          <input id="input__emailaddress" type="email" placeholder="name@email.com">
        </p>
        <p>
          <label for="input__phone">Phone Number</label>
          <input id="input__phone" type="tel" placeholder="(999) 999-9999">
        </p>
        <p>
          <label for="input__search">Search</label>
          <input id="input__search" type="search" placeholder="Enter Search Term">
        </p>
        <p>
          <label for="input__text2">Number Input</label>
          <input id="input__text2" type="number" placeholder="Enter a Number">
        </p>
        <p>
          <label for="input__text5">File</label>
          <input id="input__text5" type="file">
        </p>
        <p>
          <label for="input__text5">Hidden</label>
          <input id="input__text6" type="hidden">
        </p>
      </fieldset>
      <p><a href="#top">[Top]</a></p>
      <fieldset id="forms__select">
        <legend>Select menus</legend>
        <p>
          <label for="select">Select</label>
          <select id="select">
            <optgroup label="Option Group 1">
              <option>Option One</option>
              <option>Option Two</option>
              <option>Option Three</option>
            </optgroup>
            <optgroup label="Option Group 2">
              <option>Option One</option>
              <option>Option Two</option>
              <option>Option Three</option>
            </optgroup>
            <option>Out of optgroup</option>
          </select>
        </p>
        <p>
          <label for="select-multiple">Select multiple</label>
          <select id="select-multiple" multiple>
            <optgroup label="Option Group 1">
              <option>Option One</option>
              <option>Option Two</option>
              <option>Option Three</option>
            </optgroup>
            <optgroup label="Option Group 2">
              <option>Option One</option>
              <option>Option Two</option>
              <option>Option Three</option>
            </optgroup>
            <option>Out of optgroup</option>
          </select>
        </p>
      </fieldset>
      <p><a href="#top">[Top]</a></p>
      <fieldset id="forms__checkbox">
        <legend>Checkboxes</legend>
        <ul>
          <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice 1, <code>&lt;input&gt;</code> inside <code>&lt;label&gt;</code></label></li>
          <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice 2, <code>&lt;input&gt;</code> inside <code>&lt;label&gt;</code></label></li>
          <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox" disabled> Choice 3 disabled, <code>&lt;input&gt;</code> inside <code>&lt;label&gt;</code></label></li>
        </ul>
        <ul>
          <li><input id="checkbox4" name="checkbox" type="checkbox" checked="checked"> <label for="checkbox4">Choice 4, <code>&lt;label&gt;</code> after <code>&lt;input&gt;</code></label></li>
          <li><input id="checkbox5" name="checkbox" type="checkbox"> <label for="checkbox5">Choice 5, <code>&lt;label&gt;</code> after <code>&lt;input&gt;</code></label></li>
          <li><input id="checkbox6" name="checkbox" type="checkbox" disabled> <label for="checkbox6">Choice 6 disabled, <code>&lt;label&gt;</code> after <code>&lt;input&gt;</code></label></li>
        </ul>
      </fieldset>
      <p><a href="#top">[Top]</a></p>
      <fieldset id="forms__radio">
        <legend>Radio buttons</legend>
        <ul>
          <li><label for="radio1"><input id="radio1" name="radio" type="radio" checked="checked"> Option 1, <code>&lt;input&gt;</code> inside <code>&lt;label&gt;</code></label></li>
          <li><label for="radio2"><input id="radio2" name="radio" type="radio"> Option 2, <code>&lt;input&gt;</code> inside <code>&lt;label&gt;</code></label></li>
          <li><label for="radio3"><input id="radio3" name="radio" type="radio"> Option 3 disabled, <code>&lt;input&gt;</code> inside <code>&lt;label&gt;</code></label></li>
        </ul>
        <ul>
          <li><input id="radio4" name="radio" type="radio" checked="checked"> <label for="radio4">Option 4, <code>&lt;label&gt;</code> after <code>&lt;input&gt;</code></label></li>
          <li><input id="radio5" name="radio" type="radio"> <label for="radio5">Option 5, <code>&lt;label&gt;</code> after <code>&lt;input&gt;</code></label></li>
          <li><input id="radio6" name="radio" type="radio" disabled> <label for="radio6">Option 6 disabled, <code>&lt;label&gt;</code> after <code>&lt;input&gt;</code></label></li>
        </ul>
      </fieldset>
      <p><a href="#top">[Top]</a></p>
      <fieldset id="forms__textareas">
        <legend>Textareas</legend>
        <p>
          <label for="textarea">Textarea</label>
          <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
        </p>
        <p>
          <label for="textarea-disabled">Textarea disabled</label>
          <textarea id="textarea-disabled" rows="8" cols="48" placeholder="I am disabled" disabled></textarea>
        </p>
        <p>
          <label for="textarea-readonly">Textarea readonly</label>
          <textarea id="textarea-readonly" rows="8" cols="48" placeholder="I am readonly" readonly></textarea>
        </p>
      </fieldset>
      <p><a href="#top">[Top]</a></p>
      <fieldset id="forms__html5">
        <legend>HTML5 inputs</legend>
        <p>
          <label for="ic">Color input</label>
          <input type="color" id="ic" value="#000000">
        </p>
        <p>
          <label for="in">Number input</label>
          <input type="number" id="in" min="0" max="10" value="5">
        </p>
        <p>
          <label for="ir">Range input</label>
          <input type="range" id="ir" value="10">
        </p>
        <p>
          <label for="idd">Date input</label>
          <input type="date" id="idd" value="1970-01-01">
        </p>
        <p>
          <label for="idm">Month input</label>
          <input type="month" id="idm" value="1970-01">
        </p>
        <p>
          <label for="idw">Week input</label>
          <input type="week" id="idw" value="1970-W01">
        </p>
        <p>
          <label for="idt">Datetime input</label>
          <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
        </p>
        <p>
          <label for="idtl">Datetime-local input</label>
          <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
        </p>
        <p>
          <label for="it">Time input</label>
          <input type="time" id="it" value="23:20:50">
        </p>
      </fieldset>
      <p><a href="#top">[Top]</a></p>
      <fieldset id="forms__action">
        <legend>Action buttons</legend>
        <p>
          <input type="submit" value="Input type=submit">
          <input type="button" value="Input type=button">
          <input type="reset" value="Input type=reset">
          <input type="submit" value="Input type=button disabled" disabled>
        </p>
        <p>
          <button type="submit">Button type=submit</button>
          <button type="button">Button type=button</button>
          <button type="reset">Button type=reset</button>
          <button type="button" disabled>Button disabled</button>
        </p>
      </fieldset>
      <p><a href="#top">[Top]</a></p>
    </form>
  </section>
</main>
<footer role="contentinfo">
  <p>Inspired by <a href="https://github.com/cbracco/html5-test-page">html-test-page</a> by
    <a href="https://twitter.com/cbracco">@cbracco</a>,
    <a href="http://jkorpela.fi/www/testel.html">http://jkorpela.fi/www/testel.html</a> and
    <a href="https://gist.github.com/ve3/42280abc22579b45e12c37403c8d8c6f">https://gist.github.com/ve3/42280abc22579b45e12c37403c8d8c6f</a>.</p>
</footer>

</body>
</html>
