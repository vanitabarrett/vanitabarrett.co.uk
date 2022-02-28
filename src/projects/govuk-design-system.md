---
layout: 'layouts/project'
name: GOV.UK Design System
image_slug: govuk
role: Technical Lead & Senior Frontend Developer
summary: Working on the GOV.UK Design System, which is used by GOV.UK and other services across government.
skills:
  html:
    id: html5
    text: HTML5
  css:
    id: css3
    text: CSS3
  sass:
    id: sass
    text: Sass + BEM
  javascript:
    id: javascript
    text: JavaScript
  node:
    id: node
    text: NodeJS
  nunjucks:
    id: nunjucks
    text: Nunjucks
  jest:
    id: jest
    text: Jest
  puppeteer:
    id: puppeteer
    text: Puppeteer
tags:
  - projects
  - ongoing_projects
start_date: 2020-07-06
---

# Project: {{ name }}

<strong>{{ role }}</strong>

Working on the GOV.UK Design System, which is a library of components, styles and patterns used by the UK Government Website (GOV.UK), services across government and local councils. My role as a Senior Frontend Developer and Technical Lead is varied. Some day-to-day tasks include: investigating any bugs reported to us; researching and investigating accessibility issues and solutions; developing new components and releasing new versions of GOV.UK Frontend via npm; working with designers and content to update documentation; reporting bugs to third parties (for example: screenreader software; browsers).

<a href="design-system.service.gov.uk">design-system.service.gov.uk</a>

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/govuk-design-system.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/govuk-design-system2.png" alt="" role="presentation">
</div>

