import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { ContactPageComponent } from './contact-page/contact-page.component';
import { AboutPageComponent } from './about-page/about-page.component';
import { PortfolioPageComponent } from './portfolio-page/portfolio-page.component';
import { ResumePageComponent } from './resume-page/resume-page.component';

import { PortfolioService } from './portfolio-page/portfolio.service';
import { UiService } from './ui.service';
import { ProjectComponent } from './project/project.component';
import { ProjectPageComponent } from './project-page/project-page.component';
import { PrettyUrlPipe } from './pretty-url.pipe';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    ContactPageComponent,
    AboutPageComponent,
    PortfolioPageComponent,
    ResumePageComponent,
    ProjectComponent,
    ProjectPageComponent,
    PrettyUrlPipe
  ],
  imports: [
    AppRoutingModule,
    BrowserModule,
    HttpClientModule
  ],
  providers: [
    PortfolioService,
    UiService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
