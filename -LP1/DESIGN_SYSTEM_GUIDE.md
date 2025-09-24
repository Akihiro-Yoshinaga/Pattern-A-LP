# Rakuruma Landing Page - Design System Guide

## Overview
This document outlines the comprehensive design system for the Rakuruma (ラクルマ) car maintenance service landing page, documenting the current design DNA, component architecture, and implementation patterns.

---

## 🎨 Color Palette

### Primary Colors
- **Brand Blue**: `#003B8B` - Primary brand color used for headers, CTAs, and accents
- **Light Blue**: `#A2D1DA` - Secondary brand color used in gradients and backgrounds
- **Success Green**: `#5EBE86` - Used for checkmarks and positive indicators

### Background Colors
- **Light Blue Background**: `#F4F9FF` - Soft background for sections
- **Light Gray**: `#F7F7F7` - Alternative background for content blocks
- **White**: `#FFFFFF` - Clean background for cards and containers
- **Accent Colors**: 
  - Mint Green: `#5EBEAF`
  - Yellow: `#F4D110`

### Gradients
- **Hero Gradient**: `linear-gradient(145deg, #A2D1DA, #003B8B)`
- **Button Gradients**:
  - Blue: `linear-gradient(to left, #003B8B, #71B8C1)`
  - Green: `linear-gradient(to left, #5AC263, #7DF487)`

---

## 📝 Typography

### Font Families
- **Primary**: `'Noto Sans JP', sans-serif` - Japanese text
- **Secondary**: `'Montserrat', sans-serif` - English headings and accent text

### Font Scale
```css
.fontxl  { font-size: 32px; }  /* Extra large headlines */
.fontll  { font-size: 24px; }  /* Large headings */
.fontl   { font-size: 20px; }  /* Medium headings */
.fontm   { font-size: 18px; }  /* Body text */
.fonts   { font-size: 16px; }  /* Small body text */
.fontss  { font-size: 14px; }  /* Caption text */
```

### Font Weights
- **Regular**: `400` (`.semibold`)
- **Bold**: `600` (`.bold`)

### Responsive Typography
Mobile adjustments (max-width: 599px):
```css
.fontxl  { font-size: 20px; }
.fontll  { font-size: 18px; }
.fontl   { font-size: 18px; }
.fontm   { font-size: 16px; }
.fonts   { font-size: 14px; }
.fontss  { font-size: 12px; }
```

---

## 🏗️ Layout System

### Container Widths
- **Large**: `max-width: 1280px` (`.area_l`)
- **Medium**: `max-width: 1152px` (`.area_m`) 
- **Small**: `max-width: 1024px` (`.area_s`)
- **Minimum page width**: `1024px` (`.main`)

### Spacing
- **Section padding**: `80px` top/bottom (desktop), `60px` (mobile)
- **Card padding**: `25px` - `40px`
- **Element margins**: Commonly `15px`, `20px`, `25px`, `30px`

### Border Radius
- **Standard**: `20px` - Used for most cards and containers
- **Large curved sections**: `160px` (desktop), `80px` (mobile)
- **Circular elements**: `50%` for profile images
- **Small elements**: `8px` - `12px`

---

## 🧩 Component Architecture

### Section Structure
```html
<section class="[section-name] [background-class]">
    <div class="area_[l|m|s]">
        <!-- Content -->
    </div>
</section>
```

### Common Components

#### 1. Header Component
```html
<div class="header flexbox">
    <h1><a href="/"><img src="logo" alt="ラクルマ"></a></h1>
    <p class="fonts">対応地域：<br class="sp">世田谷区/目黒区/渋谷区</p>
    <div class="authority_tag colorfont_w fontss">
        <span class="icon_medal">🏅</span>1級自動車整備士在籍
    </div>
</div>
```

#### 2. Image Frame Component
```html
<div class="image_frame">
    <div class="image_pic" style="background-image: url(...)"></div>
</div>
```
- Uses aspect ratio padding: `padding-top: 66.66%` (3:2 ratio)
- Absolute positioned image with `background-size: cover`

#### 3. Flexbox Layouts
- **Horizontal**: `.flexbox` - Basic flex container
- **Content containers**: `.content_container` - For structured content
- **Service lists**: `.service_list` - Special flex layouts for services

#### 4. Button Component
```html
<div class="button fonts bold [background-class]">
    <a href="#">リンクテキスト</a>
</div>
```
- Fixed dimensions: `330px × 64px`
- Border radius: `40px`
- Centered content with flexbox

---

## 🎭 Animation & Transitions

### Hover Effects
- **Links**: `opacity: 0.65` on hover
- **Cards**: `transform: translateY(-2px)` with shadow enhancement
- **Transition timing**: `all linear 0.2s`

### Transform Effects
- **Mobile button area**: `translateY(85px)` slide-in effect
- **Centered positioning**: `translateX(-50%)` for absolute centered elements

---

## 📱 Responsive Design

### Breakpoints
- **Mobile**: `max-width: 599px`
- **Tablet**: `max-width: 768px` (profile page only)
- **Small mobile**: `max-width: 480px` (profile page only)

### Mobile Adaptations
- Container padding reduces to `15px`
- Curved borders change from `160px` to `80px`
- Flexbox layouts become vertical (`.flex-direction: column`)
- Image frames adjust aspect ratios
- Typography scales down proportionally

---

## 🎯 Naming Conventions

### CSS Classes

#### Background Classes
- `.bk_blue` - Brand blue background
- `.bk_lb` - Light blue background  
- `.bk_gr` - Gray background
- `.bk_w` - White background
- `.bk_mg` - Mint green background
- `.bk_y` - Yellow background

#### Color Classes
- `.colorfont_b` - Blue text (`#003B8B`)
- `.colorfont_w` - White text
- `.colorfont_gr` - Green text (`#5EBE86`)

#### Layout Classes
- `.area_[l|m|s]` - Container sizes
- `.flexbox` - Flex container
- `.pc` - Desktop only (display: block/none)
- `.sp` - Mobile only (display: none/block)

#### Component-Specific Classes
- `.top` - Hero section
- `.introduction` - Problem/solution section
- `.point` - 3-point feature section
- `.service` - Service details section
- `.plan` - Pricing section
- `.profile` - Staff profile section
- `.faq` - FAQ section
- `.contact` - Contact section

---

## 🚀 JavaScript Functionality

### Current Implementation
The project uses minimal JavaScript:
- **Server**: Express.js server (`app.js`) for routing
- **Client-side**: No significant JavaScript functionality currently implemented
- **Responsive behavior**: Achieved through CSS media queries

### Potential Enhancements
Areas where JavaScript could be added:
- FAQ accordion functionality
- Smooth scrolling navigation
- Form validation
- Image lazy loading
- Animation triggers on scroll

---

## 📋 Content Patterns

### Section Structure
1. **Hero Section** - Brand introduction with authority tag
2. **Problem/Solution** - Customer pain points and solutions
3. **3-Point Feature** - Key selling points with alternating layout
4. **Service Details** - Detailed service breakdown with icons
5. **Pricing Plans** - Clear pricing structure with CTA
6. **Additional Features** - Trust signals and unique selling points
7. **How to Use** - Step-by-step process
8. **Service Area** - Geographic coverage
9. **Options** - Additional services with emoji icons
10. **Profile** - Staff credentials and background
11. **FAQ** - Common questions and answers
12. **Contact** - Final CTA

### Content Hierarchy
- **Primary Headlines**: `.headline.fontxl.bold`
- **Secondary Headlines**: `.subhead.fontll.bold`
- **Small Headlines**: `.smallhead`
- **Body Text**: `.fonts` or `.fontm`
- **Captions**: `.fontss`

---

## 🛠️ Development Guidelines

### Best Practices
1. **Maintain existing class structure** - Don't rename core classes
2. **Use established spacing patterns** - Follow existing margin/padding conventions
3. **Preserve responsive behavior** - Ensure mobile compatibility
4. **Follow color palette** - Use documented colors consistently
5. **Maintain aspect ratios** - Keep image proportions consistent

### Adding New Components
1. Follow existing naming conventions
2. Use established color and typography classes
3. Ensure responsive compatibility
4. Test across all breakpoints
5. Maintain accessibility standards

### File Structure
- `rakuruma-style.css` - Main stylesheet
- `rakuruma-wordpress-design.html` - WordPress-compatible version
- `rakuruma-complete.html` - Complete version with placeholders
- `rakuruma-index.html` - Current modified version
- `app.js` - Express server for development

This design system provides a solid foundation for maintaining consistency while allowing for strategic enhancements to the Rakuruma landing page.