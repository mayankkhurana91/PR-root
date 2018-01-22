
plugin.tx_pingreceive_information {
    view {
        # cat=plugin.tx_pingreceive_information/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:pingreceive/Resources/Private/Templates/
        # cat=plugin.tx_pingreceive_information/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:pingreceive/Resources/Private/Partials/
        # cat=plugin.tx_pingreceive_information/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:pingreceive/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pingreceive_information//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_pingreceive_management {
    view {
        # cat=plugin.tx_pingreceive_management/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:pingreceive/Resources/Private/Templates/
        # cat=plugin.tx_pingreceive_management/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:pingreceive/Resources/Private/Partials/
        # cat=plugin.tx_pingreceive_management/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:pingreceive/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pingreceive_management//a; type=string; label=Default storage PID
        storagePid =
    }
}
