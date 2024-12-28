# WordPress Foldable Sections Template

A WordPress page template that creates collapsible/foldable sections from H2 headings while maintaining your theme's styling. I'm using it for a child theme of the Astra. If you are not using a child theme, you may need to make some changes to the functions.php file.

![Foldable Sections Template](https://github.com/gouliming4437/FoldableSectionTemplate4WP/blob/main/Demo.png)

## Features

- Creates collapsible sections from H2 headings in your content
- Maintains all your theme's existing styles
- Smooth animations for folding/unfolding sections
- Works with any WordPress theme
- Simple to install and use
- Fully responsive

## Installation

1. Download the files and place them in your child theme directory with this structure: 

```
your-theme-child/
├── functions.php (add the code to your existing functions.php)
├── page-foldable.php
└── assets/
├── css/
│ └── foldable-template.css
└── js/
└── foldable-template.js
```

2. If you don't already have a child theme, [create one first](https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
3. Add the provided code to your child theme's `functions.php` file
4. Clear your browser cache and WordPress cache if you're using any caching plugins

## Usage

1. Create a new page in WordPress
2. In the page editor, look for "Page Attributes" in the sidebar
3. Select "Foldable Sections Page" from the Template dropdown
4. Add your content using H2 headings to create sections
5. Publish or update the page

Example content structure: 
```
<h2>Section 1</h2>
<p>Content for section 1</p>
<h2>Section 2</h2>
<p>Content for section 2</p>
``` 

## How It Works

- The template automatically converts H2 headings and their content into collapsible sections
- Content before the first H2 heading remains always visible
- Clicking on any H2 heading toggles its content visibility
- The arrow indicator rotates to show the section's state
- All other theme styling and features remain intact

## Customization

You can customize the appearance by modifying the CSS in `foldable-template.css`:

- Change the arrow indicator by modifying the `content` property in `.foldable-title::after`
- Adjust animation speed by modifying the `transition` properties
- Modify colors, spacing, and other styles to match your theme

## Requirements

- WordPress 5.0 or higher
- A properly configured WordPress child theme

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Support

If you encounter any issues or have questions, please open an issue on GitHub. 