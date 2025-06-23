package fred.portfolio.data.dtos;

import java.util.List;

public record EventSaveDTO(
        String title,
        String description,
        String link,
        List<Long> skillsId
) {
}
