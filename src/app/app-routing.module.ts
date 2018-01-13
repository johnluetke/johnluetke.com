import { NgModule }              from '@angular/core';
import { RouterModule, Routes }  from '@angular/router';

import { AboutPageComponent }     from './about-page/about-page.component';
import { ContactPageComponent }   from './contact-page/contact-page.component';
import { PortfolioPageComponent } from './portfolio-page/portfolio-page.component';
import { ProjectPageComponent } from './project-page/project-page.component';
import { ResumePageComponent}     from './resume-page/resume-page.component';

const appRoutes: Routes = [
  { path: '', redirectTo: '/portfolio', pathMatch: 'full' },
  { path: 'about', component: AboutPageComponent },
  { path: 'contact', component: ContactPageComponent },
  { path: 'portfolio', component: PortfolioPageComponent, pathMatch: 'full' },
  { path: 'portfolio/:name', component: ProjectPageComponent },
  { path: 'projects', component: PortfolioPageComponent, pathMatch: 'full' },
  { path: 'projects/:name', component: ProjectPageComponent },
  { path: 'resume', component: ResumePageComponent }
];

@NgModule({
  imports: [
    RouterModule.forRoot(
      appRoutes,
      { enableTracing: false } // <-- debugging purposes only
    )
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule {}
