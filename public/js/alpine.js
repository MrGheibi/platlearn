function sidebar() {
    return {
        isSettingsPanelOpen: false,
        SideBarOpener() {
            this.isSettingsPanelOpen = !this.isSettingsPanelOpen
        }, closeSideBar() {
            this.isSettingsPanelOpen = false
        }
    }
}
