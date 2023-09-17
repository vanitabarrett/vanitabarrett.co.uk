---
layout: 'layouts/project'
name: Which?
image_slug: which
role: Senior Product Engineer / Frontend Developer
summary:
skills:
  html:
    id: html5
    text: HTML5
  sass:
    id: sass
    text: Sass
  javascript:
    id: javascript
    text: JavaScript
  react:
    id: react
    text: React
  typescript:
    id: typescript
    text: Typescript
  graphql:
    id: graphql
    text: GraphQL
  reactTestingLibrary:
    id: reactTestingLibrary
    text: React Testing Library
  webdriverIO:
    id: webdriverio
    text: Webdriver I/O
tags:
  - projects
  - ongoing_projects
start_date: 2023-05-30
---

# Project: {{ name }}

<strong>{{ role }}</strong>

Working in the Content Discovery team, focused on improving navigation through the Which? website. Helping guide and encourage the team to use best product engineer practices, such as engineer involvement with design and research, quick prototyping to gather insights, and taking responsibility for testing and QA of PRs. Also using my web accessibility knowledge and experience to help the team make improvements across the site, and making sure it's considered in the build of new pages and components.

<a href="https://www.which.co.uk/">which.co.uk</a>

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/which.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/which2.png" alt="" role="presentation">
</div>
