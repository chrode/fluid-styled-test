# **************************************************
# Add the slider to the "New Content Element Wizard"
# **************************************************
mod.wizards.newContentElement.wizardItems.common {
    elements {
        fs_progressbar {
            iconIdentifier = content-image
            title = LLL:EXT:fluid_styled_test/Resources/Private/Language/locallang_be.xlf:wizard.title
            description = LLL:EXT:fluid_styled_test/Resources/Private/Language/locallang_be.xlf:wizard.description
            tt_content_defValues {
                CType = fs_progressbar
            }
        }
    }
    show := addToList(fs_progressbar)
}