# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a multi-variant landing page project for Rakuruma (ラクルマ), a Japanese car wash and maintenance service. The project contains multiple HTML versions and serves them through an Express.js server for development and testing purposes.

## Development Commands

### Server Management
```bash
# Start development server with auto-reload
npm run dev

# Start production server
npm start
# or
node app.js
```

### Available Routes
- `/` - WordPress-compatible design version (default)
- `/rakuruma` - WordPress design version
- `/complete` - Complete version with placeholder images
- `/profile` - Profile page
- `/original` - Original design
- `/improved` - Improved version with scenario-based content

Server runs on `http://localhost:3000` by default.

## Architecture & File Structure

### Core Components
- **`app.js`** - Express server with route definitions for different page variants
- **`package.json`** - Node.js dependencies (Express, nodemon)
- **`-LP1/`** - Main development directory containing all page variants and assets

### HTML Variants
- `rakuruma-wordpress-design.html` - Main WordPress-compatible version
- `rakuruma-complete.html` - Complete version with all sections
- `rakuruma-improved-scenario.html` - Enhanced version with improved user scenarios
- `rakuruma-index.html` - Original base version
- `rakuruma-original-design.html` - Original design reference

### Stylesheet Architecture
- **`rakuruma-style.css`** - Main stylesheet with comprehensive CSS classes
- **`design-tokens.css`** - CSS custom properties for design system
- **`rakuruma-style-refactored.css`** - Refactored version (if needed)

### Design System Classes

#### Background Classes
- `.bk_blue` - Brand blue background (#003B8B)
- `.bk_lb` - Light blue background (#F4F9FF)
- `.bk_gr` - Gray background (#F7F7F7)
- `.bk_w` - White background
- `.bk_mg` - Mint green background
- `.bk_y` - Yellow background

#### Layout Classes
- `.area_l` - Large container (max-width: 1280px)
- `.area_m` - Medium container (max-width: 1152px)
- `.area_s` - Small container (max-width: 1024px)
- `.flexbox` - Flex container
- `.pc` - Desktop only display
- `.sp` - Mobile only display

#### Typography Classes
- `.fontxl` - Extra large (32px desktop, 20px mobile)
- `.fontll` - Large (24px desktop, 18px mobile)
- `.fontl` - Medium (20px desktop, 18px mobile)
- `.fontm` - Body (18px desktop, 16px mobile)
- `.fonts` - Small (16px desktop, 14px mobile)
- `.fontss` - Caption (14px desktop, 12px mobile)
- `.bold` - Font weight 600
- `.semibold` - Font weight 400

#### Color Classes
- `.colorfont_b` - Blue text (#003B8B)
- `.colorfont_w` - White text
- `.colorfont_gr` - Green text (#5EBE86)

### Component Patterns

#### Section Structure
```html
<section class="[section-name] [background-class]">
    <div class="area_[l|m|s]">
        <!-- Content -->
    </div>
</section>
```

#### Image Frame Component
```html
<div class="image_frame">
    <div class="image_pic" style="background-image: url(...)"></div>
</div>
```

#### Button Component
```html
<div class="button fonts bold [background-class]">
    <a href="#">Link Text</a>
</div>
```

## Design Guidelines

### Responsive Design
- Mobile breakpoint: `max-width: 599px`
- Curved borders: 160px desktop → 80px mobile
- Container padding: Reduces to 15px on mobile
- Typography scales proportionally

### Color Palette
- **Primary Blue**: #003B8B
- **Light Blue**: #A2D1DA
- **Success Green**: #5EBE86
- **Mint Green**: #5EBEAF
- **Yellow**: #F4D110

### Typography
- **Primary Font**: 'Noto Sans JP', sans-serif (Japanese)
- **Secondary Font**: 'Montserrat', sans-serif (English/accents)

## WordPress Child Theme

The `Pattern-A-LP/rakuruma-child/` directory contains WordPress child theme files:
- `functions.php` - WordPress theme functions (currently empty)
- `style.css` - Child theme styles (currently empty)
- Template parts in `template-parts/sections/`

## Documentation Files

- **`DESIGN_SYSTEM_GUIDE.md`** - Comprehensive design system documentation
- **`modification-guide.md`** - Japanese guide for safe design modifications
- Both files contain detailed component specifications and modification best practices

## Development Notes

- The project uses placeholder images and SVG data URIs for development
- Multiple page variants allow for A/B testing and design iteration
- Express server provides simple routing for testing different versions
- All CSS follows a utility-first approach with semantic class names
- Design system is well-documented and should be preserved when making modifications