import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AddgameComponent } from './addgame/addgame.component';
import { HubComponent } from './hub/hub.component';
import { GaleryComponent } from './galery/galery.component';
import { BasketComponent } from './basket/basket.component';
import { FidelityComponent } from './fidelity/fidelity.component';

const routes: Routes = [
  {path:'home',component:HomeComponent},
  {path:'addgame',component:AddgameComponent},
  {path:'Fidelity',component:FidelityComponent},
  {path:'Hub',component:HubComponent},
  {path:'addgame',component:AddgameComponent},
  {path:'basket',component:BasketComponent},
  {path:'',redirectTo:'/home',pathMatch:'full'}
];

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AddgameComponent,
    HubComponent,
    GaleryComponent,
    BasketComponent,
    FidelityComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes)
  ],
  exports:[RouterModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
